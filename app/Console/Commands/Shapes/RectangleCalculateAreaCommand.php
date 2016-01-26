<?php namespace App\Console\Commands\Shapes;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class RectangleCalculateAreaCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'shape:rectangle';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Calculate a rectangle\'s area.';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$w = $this->argument('width');
		$h = $this->argument('height');


        $area = $h*$w;



		$this->info("Output the calculated area of a rectangle with a width of $w and height of $h is: $area");
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			[ 'width', InputArgument::REQUIRED, 'The rectangle width.' ],
			[ 'height', InputArgument::REQUIRED, 'The rectangle height.' ]
		];
	}

}
