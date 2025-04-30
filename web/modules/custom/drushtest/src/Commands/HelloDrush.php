<?php

namespace Drupal\drushtest\Commands;

use Drush\Commands\DrushCommands;
use Drush\Attributes as CLI; // Explicitly add this

class HelloDrush extends DrushCommands {

    #[CLI\Command(name: 'drushtest:hello', description: 'Outputs a hello message.')]
    public function hello() {
        $this->output()->writeln('Hello from the DrushTest module!');
    }
}
