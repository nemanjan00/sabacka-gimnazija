git add . ; git commit -m "$1" ; git push heroku master; git push origin master
git_stats generate --out-path=../stats
cd ../stats/
git add . ; git commit -m "Update" ; git push heroku master
cd ../sabacka-gimnazija/
