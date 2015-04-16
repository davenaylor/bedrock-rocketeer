# Bedrock Rocketeer

[Bedrock](https://github.com/roots/bedrock) friendly configuration files for
[Rocketeer](http://rocketeer.autopergamene.eu)

## How to use

Clone this repository into your freshly installed Bedrock directory:

`git clone https://github.com/davenaylor/bedrock-rocketeer.git
your-bedrock/.rocketeer/`

Once cloned, delete the `.git` directory inside `.rocketeer` and add
`.rocketeer/*` to your .gitignore file.

Edit each configuration file to your preference.  In particular you need to
edit:

 * config.php
 * scm.php
 * remote.php
 * connections/production/remote.php
 * connections/staging/remote.php

Once all that's done and you've fully configured Bedrock, run:

`rocketeer --on=staging check` 

That'll test your configuration and notify you of problems.  Next run:

`rocketeer --on=staging setup` 

This will create all the required Bedrock directories on the remote server.  You
can actually skip this part if you like because when you deploy the site
properly, the setup is automatically called if it's not been done manually.

So:

`rocketeer --on=staging deploy`

to deploy a staging site, replacing staging with whatever connection you're
deploying.  

The deploy will create a blank `.env` file on the remote server.  Overwrite it
with .env.example from Bedrock (present in the root of your new site) and fill
in your site and database details.

Now you should have a fully deployed Bedrock WordPress site ready for
installation at:

`http://your-site/wp/`

Good luck!



