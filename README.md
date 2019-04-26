# desafio fpf de duas noites

## Fazendo funcionar a API depois do clone

Com o composer instalado, execute o comando no diretório api/
 $ composer install

Para que seja gerada uma nova chave
$ php artisan key:generate

A API já estará funcionando. Agora clique um banco no mysql chamado "fpf" e execute o comando abaixo:
$ php artisan migrade --seed

A API está pronta para os testes :)



## Fazendo funcionar o APP depois do clone

Caso seja apresentado: "could not find module @angular-devkit/build-angular", exeute o comando para correção:
$ npm install --save-dev @angular-devkit/build-angular

Em seguida:

ng serve

//E corre para o abraço, tudo pronto.
