<?php
namespace Deployer;

require 'recipe/laravel.php';

set('ssh_type', 'native'); 
set('ssh_multiplexing', false); 

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'https://github.com/johnsonsebire/manifest.git');

// [Optional] Allocate tty for git clone. Default value is false.
// set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('18.119.116.103')
    // ->set('deploy_path', '~/{{application}}'); 
    ->user('manifest')
    ->set('deploy_path', '/var/www/manifestghana.com');
    
// Tasks

set('INFOBIP_SENDER', 'ManifestGH');
set('INFOBIP_AUTHORIZATION', 'App 63de2ba7a4267a19ce768f254fe49ce5-b2f908e0-24f8-4ecd-8741-508b66379aca');

task('notify', function(){
    
    // SEND SMS
    $destination="233204179139"; 
    $message="Application Successfully Deployed for Manifest Multimedia"; 
    $sender=get('INFOBIP_SENDER'); 
    $authorization=get('INFOBIP_AUTHORIZATION');


    $response= SMSnotify($destination, $message, $sender, $authorization); 
    
    write('Sending SMS Notification');
    
    print_r($response);

    

   
    
    }); 

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

after('success', 'notify');