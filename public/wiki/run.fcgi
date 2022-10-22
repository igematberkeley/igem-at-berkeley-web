#!/services/http/users/i/igem/wiki/venv/bin/python
import os
import sys

sys.path.insert(0, os.path.expanduser('~/public_html/wiki'))
from flup.server.fcgi import WSGIServer
from app import app

if __name__ == '__main__':
	WSGIServer(app).run()
