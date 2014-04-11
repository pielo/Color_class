#!/usr/bin/php
<?php
class Color
{
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	function __construct(array $kwargs)
	{
		print('Construct called' . PHP_EOL);
		if (array_key_exists('rgb', $kwargs))
		{
			$this->red = $kwargs['rgb'] % 256;
			$this->green = ($kwargs['rgb'] / 256) % 256;
			$this->blue = ($kwargs['rgb'] / 65536) % 256;
		}
		else if (array_key_exists('red', $kwargs) and array_key_exists('green', $kwargs) and array_key_exists('blue', $kwargs))
		{
			$this->red = $kwargs['red'];
			$this->green = $kwargs['green'];
			$this->blue = $kwargs['blue'];
		}
		else
			print('Wrong args' .PHP_EOL);
		return ;
	}

	function __destruct()
	{
		print('Destructor called' . PHP_EOL);
	}
}

$instance = new Color(array( 'red' => 0xff, 'green' => 0   , 'blue' => 0    ));
$instance2 = new Color( array( 'rgb' => 255 << 8 ) );
print($instance->red . PHP_EOL);
?>
