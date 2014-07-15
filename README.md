Language
==================

Installation & Configuration
-------------

To install

    ppm install language


example to add library:

	$di->set('jsvars', function(){
		$jsvars = new Jsvarsppm\Jsvars();
		return $jsvars;
	});


execute in controller

    public function testAction(){

      $array = array(
          'var1' => 'testing1',
          'var2' => 'testing2'
        );

      $this->jsvars->up('testing',$array);

    }


execute in view, testing return an object in js
you need define your variable in your view header

    {{ testing }}

    // you can use your vars in js
    <script>
     console.log(var1);
     console.log(var2);
    </script>
