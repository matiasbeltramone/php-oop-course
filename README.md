# PHP Bootstrap for Object Oriented Programming (Structure)
 
## Introduction 

This is a repository intended to serve as a starting point if you want to bootstrap a project in PHP.
 
It could be useful if you want to start from scratch a kata or a little exercise or project.

* Latest versions of PHP and PHPUnit
* Best practices applied:
  * [`README.md`][link-readme] (badges included)
  * [`LICENSE`][link-license]
  * [`composer.json`][link-composer-json]
  * [`phpunit.xml`][link-phpunit]
  * [`.gitignore`][link-gitignore]
  * [`.editorconfig`][link-editorconfig]
  * [`.travis.yml`][link-travis-yml]
  * [`.scrutinizer.yml`][link-scrutinizer]

In this case we use this repository for onboarding of the company.

## How To Start
### Cloning the repository 

Clone this repository. We recommend to follow the next step by step process in order to avoid adding the bootstrap project commits to your project Git history:

1. Clone this repository: `git clone https://github.com/matiasbeltramone/php-oop-course your-project-name`
2. Move to the project directory: `cd your-project-name`
3. If you don't have it already, [install Composer](https://getcomposer.org/download/).
4. Install the project dependencies: `composer install`
5. Run all the checks: `composer test`. This will do some checks that you can perform with isolated commands: 
    1. [PHP Parallel Lint](https://github.com/JakubOnderka/PHP-Parallel-Lint): `composer lint`.
    2. [PHP Style Check](https://github.com/squizlabs/PHP_CodeSniffer): `composer style`. If you want to fix style issues automatically: `composer fix-style`.
    3. [PHP Unit](https://phpunit.de/): `composer phpunit`.
6. Create your own repository cleaning the bootstrap project history:
    1. Remove previous Git history in order to do not add the bootstrap repo noise in your project: `rm -rf .git`
    2. Initialize your own Git repository: `git init`
    3. Add the bootstrap files: `git add .`
    4. Commit: `git commit -m "Initial commit with project boilerplate based on https://github.com/matiasbeltramone/php-oop-course"`
    5. Add your remote repository: `git remote add origin git@github.com:your-username/your-project-name`
    6. Upload your local commits to the new remote repo: `git push -u origin master`
7. Start coding!

## License

The MIT License (MIT). Please see [License File][link-license] for more information.

[link-license]: LICENSE
[link-readme]: README.md
[link-composer-json]: composer.json
[link-phpunit]: phpunit.xml
[link-gitignore]: .gitignore
[link-editorconfig]: .editorconfig    
[link-travis-yml]: .travis.yml           
[link-scrutinizer]: .scrutinizer.yml  
