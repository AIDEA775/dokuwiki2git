dokuwiki2git
============

dokuwiki2git converts dokuwiki data directory into a git repository containing
the wiki pages, with proper history. Thus, migration to git-backed wiki engines
(eg. gollum) becomes easier.

Requirements
-----
* python >= 2.7
* php enough to host the dokuwiki site that is to be converted
* git
* gzip
* bzip2

Usage
-----

    $ dokuwiki2git [options] /path/to/dokuwiki

This will create a git repository in `gitdir/`, containing the whole history of
the dokuwiki pages and media, one commit per change.

Details
-------

Change files (`*.changes`) under `data/meta` and `data/media_meta` are read for
changelog information of each page or media. The changelog of all pages is then
sorted by date, and a separate commit is created from each changelog entry, with
the content taken from `data/attic` or `data/media_attic/`.

The original *author name*, *email*, *date* and *change summary* are converted
to standard parts of the created git commit. Other original information such as
*IP*, *change type* or so are written to a note `refs/notes/dokuwiki2git` which 
annotates the imported commits. 

License
-------

dokuwiki2git is licensed under AGPLv3.

Contacting
----------

Bugs? Feature requests? Mail the author!
