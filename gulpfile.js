/*
 * gulpfíle.js
 * Copyright (C) 2017 root <root@vps-1077934-6587.manage.myhosting.com>
 *
 * Distributed under terms of the MIT license.
 */

  'use strict';
  const elixir = require('laravel-elixir');
  require('laravel-elixir-vue-2');
  elixir(mix => {
	 
   mix.sass('app.scss').webpack('app.js');  });

