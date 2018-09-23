<?php
    /**
     * Created by PhpStorm.
     * User: kosmo
     * Date: 22.09.18
     * Time: 23:06
     */

    namespace KosmosKosmos\Newsletter2Go\Models;

    use Model;

    class Settings extends Model {

        public $implement = ['System.Behaviors.SettingsModel'];

        // A unique code
        public $settingsCode = 'kosmoskosmos_newsletter2go_settings';

        // Reference to field configuration
        public $settingsFields = 'fields.yaml';

    }