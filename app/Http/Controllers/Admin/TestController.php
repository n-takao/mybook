<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function add()
    
    {
        return <<<EOF
        
        <html>
        <head>
        <title>hello</title>
        <style>
        body {font-size:16pt; color:#999;}
        h1 {font-size:100pt; text-align:right;color:#eee;margin:-40px 0px -50px 0px;}
        
        </style>
        </head>
        <body>
        <h1>add</h1>
        <p>これは、Helloコントロールのaddアクションです。</p>
        
        </body>
        </html>
        EOF;
    }
}