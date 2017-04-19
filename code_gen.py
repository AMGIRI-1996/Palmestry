
baseurl='\t\t\t<input name="marriageLine" type="radio" id="marriageLine%s" value="%s" /><label for="marriageLine%s"><img src="images/marriageLine/%s.jpg" height=195 width=150></label>'

for i in range(1, 18):
    url = baseurl % (i,i,i,i)
    print(url+"\n")