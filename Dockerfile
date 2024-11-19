# usa uma imagem base com PHP e Apache, define a versão que será usada, para o railway entender 
FROM php:8.1-apache

# instala extensões necessárias, caso precise de instalar alguma dependência de php ele instala aqui 
RUN docker-php-ext-install mysqli pdo pdo_mysql

# copia os arquivos do projeto para o contêiner, cria uma "url" para os arquivos de src e onde eles vão ficar
COPY ./src/ /var/www/html/

# expõe a porta 3000 para o Railway, o railway naturalmente não vai entender qual porta usar, essa parte do código mostra
EXPOSE 3000

# esse comando executa as instruções e inicia o servidor
CMD ["php", "-S", "0.0.0.0:3000", "-t", "/var/www/html/"]
