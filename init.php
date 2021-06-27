<?php

$init->setup()
    ->delete('tailwind.config.js');

$init->output('Installation Finished. Yep, As Quick As That.')
    ->run(
        [
            'npm install',
            'npm run dev'
        ]
    );