from PIL import Image
import glob


for filename in glob.glob('images/star/*.jpg'):
    im=Image.open(filename)
    print (filename)
    croppedIm = im.crop((0, 0, 330, 400))
    croppedIm.save(filename)




