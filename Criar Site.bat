@echo off

:: Criando as pastas
mkdir "meu_site\assets"
mkdir "meu_site\css"
mkdir "meu_site\js"
mkdir "meu_site\pages"
mkdir "meu_site\includes"
mkdir "meu_site\data"

:: Criando os arquivos
echo. > "meu_site\index.html"
echo. > "meu_site\styles.css"
echo. > "meu_site\script.js"
echo. > "meu_site\README.md"

echo Pastas e arquivos criados com sucesso!
pause
