<?php

// autoload_classmap.php generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AdminController' => $baseDir . '/app/controllers/AdminController.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'Cartalyst\\Sentry\\Groups\\GroupExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\GroupNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\NameRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserBannedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserSuspendedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\LoginRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\PasswordRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserAlreadyActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\WrongPasswordException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Comment' => $baseDir . '/app/models/Comment.php',
    'CommentsTableSeeder' => $baseDir . '/app/database/seeds/CommentsTableSeeder.php',
    'CreateCommentsTable' => $baseDir . '/app/database/migrations/2013_07_12_055004_create_comments_table.php',
    'CreatePostsTable' => $baseDir . '/app/database/migrations/2013_07_12_055016_create_posts_table.php',
    'CreateRolesTable' => $baseDir . '/app/database/migrations/2013_07_11_133055_create_roles_table.php',
    'CreateUsersTable' => $baseDir . '/app/database/migrations/2013_07_11_143555_create_users_table.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'MigrationCartalystSentryInstallGroups' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225929_migration_cartalyst_sentry_install_groups.php',
    'MigrationCartalystSentryInstallThrottle' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225988_migration_cartalyst_sentry_install_throttle.php',
    'MigrationCartalystSentryInstallUsers' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225921_migration_cartalyst_sentry_install_users.php',
    'MigrationCartalystSentryInstallUsersGroupsPivot' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot.php',
    'Post' => $baseDir . '/app/models/Post.php',
    'PostsTableSeeder' => $baseDir . '/app/database/seeds/PostsTableSeeder.php',
    'Role' => $baseDir . '/app/models/Role.php',
    'RolesTableSeeder' => $baseDir . '/app/database/seeds/RolesTableSeeder.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
    'UsersTableSeeder' => $baseDir . '/app/database/seeds/UsersTableSeeder.php',
    'Way\\Generators\\Generators\\ControllerGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ControllerGenerator.php',
    'Way\\Generators\\Generators\\FormDumperGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/FormDumperGenerator.php',
    'Way\\Generators\\Generators\\Generator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/Generator.php',
    'Way\\Generators\\Generators\\MigrationGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/MigrationGenerator.php',
    'Way\\Generators\\Generators\\ModelGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ModelGenerator.php',
    'Way\\Generators\\Generators\\RequestedCacheNotFound' => $vendorDir . '/way/generators/src/Way/Generators/Generators/Generator.php',
    'Way\\Generators\\Generators\\ResourceGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ResourceGenerator.php',
    'Way\\Generators\\Generators\\ScaffoldGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ScaffoldGenerator.php',
    'Way\\Generators\\Generators\\SeedGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/SeedGenerator.php',
    'Way\\Generators\\Generators\\TestGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/TestGenerator.php',
    'Way\\Generators\\Generators\\ViewGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ViewGenerator.php',
);
