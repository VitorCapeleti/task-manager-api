# Use uma imagem base com PHP e Apache
FROM php:8.1-apache

# Instale extensões necessárias, se houver
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie os arquivos do projeto para o contêiner
COPY ./src/ /var/www/html/

# Exponha a porta 3000 para o Railway
EXPOSE 3000

# Comando para iniciar o servidor
CMD ["php", "-S", "0.0.0.0:3000", "-t", "/var/www/html/"]
