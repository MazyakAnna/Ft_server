autoindex="autoindex off"
path=/etc/nginx/sites-enabled/bmaegan42.com/my-nginx.conf
sed -i "54s/autoindex on;/$autoindex;/" "$path"

service nginx stop
service nginx start
