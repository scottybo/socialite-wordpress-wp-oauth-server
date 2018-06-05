<?php

namespace SocialiteProviders\WordPressSelfHosted;

use SocialiteProviders\Manager\SocialiteWasCalled;

class WordPressSelfHostedExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('wordpress_self_hosted', __NAMESPACE__.'\Provider');
    }
}
