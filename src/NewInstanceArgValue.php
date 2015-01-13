<?php


	class tad_DI52_NewInstanceArgValue {

		protected $class_name;

		public static function create( $class_name, $container ) {
			if ( ! class_exists( $class_name ) ) {
				throw new InvalidArgumentException( "Class $class_name does not exist" );
			}
			$instance = new self;
			$instance->class_name = $class_name;

			return $instance;
		}

		public function get_value() {
			return new $this->class_name;
		}
	}