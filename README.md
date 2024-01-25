# Mikrotik External Captive Portal

The following actions are required to use the code given in this repo:

## Portal Setup Using Git

Suppose your domain is `hotspot.example.com`. It can be setup like this:

```
cd /var/www
git clone https://github.com/splash-networks/mikrotik-yt-portal
mv mikrotik-yt-portal hotspot.example.com
cd /var/www/hotspot.example.com
```

Copy the `.env.example` file to `.env` and set the values of the given environment variables in it:

```
cp .env.example .env
nano .env
```

Navigate to public folder:

`cd /var/www/hotspot.example.com/public`

Use [this](https://getcomposer.org/download/) link to install Composer. Then run `php composer.phar install` to install the packages given in `composer.json`.

## Apache Virtual Hosts

Apache virtual host can be setup on the portal server using the instructions given [here](https://gist.github.com/nasirhafeez/d47c9d68742227a23f1011455a190490#apache-site-setup).

The portal files are in public folder in this repository. DocumentRoot will be:

`/var/www/hotspot.example.com/public`

It has been successfully tested with `RouterOS v7.4.1`

## Mikrotik Hotspot Login file

Add your domain to `login.html` in action field and upload it to Mikrotik router in Files => Hotspot folder.

To get rid of the "You are logged in" message during hotspot login, the file `alogin.html` may be replaced on the Mikrotik. The status page will not be shown after that.
