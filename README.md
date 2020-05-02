# Lando, the tool: Docker Human Friendly

Code examples for WordCamp Spain Online 2020

- https://2020.spain.wordcamp.org/
- https://2020.spain.wordcamp.org/session/lando-la-herramienta-docker-human-friendly/

### Training

https://www.jjpeleato.com/courses/lando/

### Installing

`git clone https://github.com/jjpeleato/courses-lando.git`

### Installing dependencies

- You have to install **Lando**: https://docs.devwithlando.io/

**Note:** If you work with Windows. To execute the commands, we recommend installing **Cygwin** http://www.cygwin.com/

**Note:** I recommend installing the following IDE for programming: Visual Studio Code (https://code.visualstudio.com/) or PHPStorm (recommended) (https://www.jetbrains.com/phpstorm/).

### Content

- Example 1: In the first example you can see a basic WordPress recipe.
- Example 2: In the second example you can see a basic WordPress recipe, proxy system, custom services like PhpMyAdmin and custom webroot.
- Example 3: In the third example you can see a basic WordPress recipe, proxy system, custom config to PHP and older version, custom services like PhpMyAdmin and custom webroot.
- Example 4: In the fourth example you can see a LandoFile without recipe, a basic config with Nginx, PHP 7.4, Node.js, npm, gulp and composer.
- Example 5: In the fifth example you can see the most complete LandoFile. The environment uses the following services and tools: Apache 2.4, PHP 7.4, Composer, PHP_CodeSniffer, Node.js, NPM, Yarn, Gulp, MariaDB, Mailhog, PhpMyAdmin and Deployer.

### Plus

```bash
cd plus/

# Initialize a wordpress recipe using the latest WordPress version
lando init \
  --source remote \
  --remote-url https://wordpress.org/latest.tar.gz \
  --recipe wordpress \
  --webroot wordpress \
  --name my-first-wordpress-app

# Start it up
lando start

# List information about this app.
lando info
```

### Technologies and tools

The present project uses several technologies and tools for the automation and development process. For more information and learning visit the following links.

1. WordPress: https://wordpress.org/
2. Lando: https://docs.devwithlando.io/
3. Docker: https://www.docker.com/
4. Git: https://git-scm.com/
5. Apache: https://www.apache.org/
6. Nginx: https://www.nginx.com/
7. MariaDB: https://mariadb.org/
8. MySQL: https://www.mysql.com/
9. PHP: https://www.php.net/
10. Composer: https://getcomposer.org/
11. PHP_CodeSniffer: https://github.com/squizlabs/PHP_CodeSniffer
12. PhpMyAdmin: https://www.phpmyadmin.net/
13. Deployer: https://deployer.org/
14. Node.js: https://nodejs.org/
15. NPM: https://www.npmjs.com/
16. Yarn: https://yarnpkg.com/
17. Gulp: https://gulpjs.com/
18. Mailhog: https://github.com/mailhog/MailHog
19. EditorConfig: https://editorconfig.org/

**Note:** Thanks a lot of developers that to work on this projects.

### Clarifications

1. It is possible that on Mac OS the Gulp tasks do not run the correct form. In this case install NodeJS, NPM and Gulp-cli in your OS and execute the tasks outside the Docker containers.

## Finally

More information on the following commits. If required.

Grettings **@jjpeleato**.