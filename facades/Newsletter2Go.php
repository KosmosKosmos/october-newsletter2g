<?php
    /**
     * Created by PhpStorm.
     * User: kosmo
     * Date: 22.09.18
     * Time: 22:59
     */

    namespace KosmosKosmos\Newsletter2Go\Facades;

    use October\Rain\Support\Facade;

    class Newsletter2Go extends Facade {

        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor() { return '\KosmosKosmos\Newsletter2Go\Classes\Newsletter2Go'; }

    }