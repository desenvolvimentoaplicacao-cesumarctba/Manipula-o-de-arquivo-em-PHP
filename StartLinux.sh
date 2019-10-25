#!/bin/bash


clear
echo Iniciando Servidor php....

if ! php -S localhost:1234
then 
	echo ERRO: PHP Não Instalado
	exit 1
fi
echo Servidor PHP INICIADO!!!





