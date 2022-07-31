# igemweb-roxo

Publish new changes to the public site with the following code:
  hugo && rsync -avz --delete public/ igem@ssh.ocf.berkeley.edu:~/public_html/
