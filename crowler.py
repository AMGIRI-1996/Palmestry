import urllib.request
import os
baseurl="http://www.yourchineseastrology.com/images/upload/365/star-%s.png"
newpath="images/star"
if not os.path.exists(newpath):
    os.makedirs(newpath)
desti=newpath+"/%s.jpg"
for i in range(6, 10):
    url = baseurl % i
    dest = desti % i
    urllib.request.urlretrieve(url,dest )
