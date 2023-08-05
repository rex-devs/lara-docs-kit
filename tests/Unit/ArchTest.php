<?php

test('ensures no debugging')
    ->expect(['dd', 'dump', 'ray', 'var_dump'])
    ->not->toBeUsed();
