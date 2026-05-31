<?php

use App\Models\User;

it('should insert users', function () {
    $users = User::factory(10)->create();

    expect($users->count())->toBe(10);
});
