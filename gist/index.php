
<?php

/*
https://laravelplayground.com/#/snippets/55e15820-248c-4ea7-980c-1f9b521a9e77
*/

Route::get('/', function (){
  return view('playground', [
    'title' => 'Laravel Playground'
  ]);
});

?>
