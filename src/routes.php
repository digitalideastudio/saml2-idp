<?php

Route::group(['prefix' => config('saml2-idp.routesPrefix')], function () {

    Route::get('test', function () {
        echo 'Hello from Saml2IdP package';
    });

});