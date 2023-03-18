<?php 

    //Config SANDBOX or PRODUCTION environment
    $SANDBOX_ENVIRONMENT = true;
    
    $PAGSEGURO_API_URL = 'https://ws.pagseguro.uol.com.br/v2';
    $PAGSEGURO_JS_URL = 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js';

    $PAGSEGURO_EMAIL = 'luhmimuss@outlook.com';
    $PAGSEGURO_TOKEN = 'e35ab03f-d11c-430a-ab0f-fba205e113cc295326014996be7be23db2547742ea98c04a-99c9-4291-b48f-73c42370115a';

    if($SANDBOX_ENVIRONMENT){
         $PAGSEGURO_API_URL = 'https://ws.sandbox.pagseguro.uol.com.br/v2';
         $PAGSEGURO_JS_URL = 'https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js';
         $PAGSEGURO_EMAIL = 'luhmimuss@outlook.com';
         $PAGSEGURO_TOKEN = '87B0C3421373471EAE29A27197A8E20E';
    }
?>
