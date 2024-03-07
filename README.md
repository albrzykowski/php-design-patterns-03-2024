# PHP Design Patterns exercisis
Welcome to the PHP Design Patterns training

## Instruction and rules

### How to run the code?
Code can be run in console:
Example: `php iterator.php`

or through the browser. To execute code in browser first run PHP server in root directory of the repository: `php -S localhost:8080`

### How to solve exercises?
Before You start solving exercises open `lib/autoload.php` file and uncomment:
```
/*
if (file_exists('lib/' . $exerciseFileName)) {
    require $exerciseFileName;
    return;
}
*/
```

Before each exercise You need to update cloned repository:
`git pull` 

All files that You need to modify to solve problems have `.exercise.php` extention. Files with solutions will be added to the repository by me after some time spent on exercises. Files with solutions have `.solution.php` extention. To get solutions You need to update repository:
`git pull`.

All places in the code that require solving the problem are marked as `// @todo implement`.
In some cases You will need to implement **only body of class methods** and in others you will need to do implement **whole method (one or more)**. 

