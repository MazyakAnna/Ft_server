autoindex="autoindex on"
path=/etc/nginx/sites-enabled/bmaegan42.com/my-nginx.conf
sed -i "54s/autoindex off;/$autoindex;/" "$path"

service nginx stop
service nginx start
