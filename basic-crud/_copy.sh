date=`date +"%H.%M"`
target="$HOME/Téléchargements/Copies/CP-CRUD-$date"

cp -r app $target
cp -r config $target
cp -r database $target
cp -r routes $target
cp -r tests $target

echo "Copie du dossier CRUD - $date"
