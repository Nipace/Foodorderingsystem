<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;
Use App\User;
use App\Model\SocialIdentity;

class SocialAuthController extends Controller
{
    /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
  public function redirectToProvider($provider)
  {
      return Socialite::driver($provider)->redirect();
  }
  /**
   * Return a callback method from facebook api.
   *
   * @return callback URL from facebook
   */
  public function handleProviderCallback($provider)
  {
      try {
          $user = Socialite::driver($provider)->user();
      } catch (Exception $e) {
          return redirect('/login');
      }

      $authUser = $this->findOrCreateUser($user, $provider);
      Auth::login($authUser, true);
      return redirect('/menu');
  }
  public function findOrCreateUser($providerUser, $provider)
   {
       $account = SocialIdentity::whereProviderName($provider)
                  ->whereProviderId($providerUser->getId())
                  ->first();

       if ($account) {
           return $account->user;
       } else {
           $user = User::whereEmail($providerUser->getEmail())->first();

           if (! $user) {
               $user = User::create([
                   'email' => $providerUser->getEmail(),
                   'name'  => $providerUser->getName(),
               ]);
           }

           $user->identities()->create([
               'provider_id'   => $providerUser->getId(),
               'provider_name' => $provider,
           ]);

           return $user;
       }
   }
}
