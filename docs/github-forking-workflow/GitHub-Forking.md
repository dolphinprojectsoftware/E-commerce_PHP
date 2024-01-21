# Git Forking-Workflow

Si desea contribuir a la comunidad de código abierto, saber cómo bifurcar (`forking`) y generar solicitudes de extracción, también conocidas como `Pull Request` o `PR`, es esencial. Desafortunadamente, es bastante fácil cometer errores o no saber qué hacer cuando estás aprendiendo en el proceso inicial, aquí te mostraremos un procedimiento bastante estándar para crear un `fork`, hacer su trabajo, emitir un `PR` y fusionar esa solicitud de extracción nuevamente en el proyecto original.

## Creando una bifurcación

Simplemente dirígete a la página de GitHub del proyecto [E-commerce_PHP](https://github.com/dolphinprojectsoftware/E-commerce_PHP) de la comunidad de __DolphinProjectSoftware__ y haz clic en el botón "Fork".

![Fork Button](img/github-fork-button.png?raw=true "Fork Button")

Una vez que hayas hecho eso, puedes usar tu cliente git favorito o simplemente abrir la terminal para clonar tu repositorio:

```shell
# Clone your fork to your local machine
git clone git@github.com:YOUR-USERNAME/E-commerce_PHP.git
```

## Mantener su bifurcación actualizada

Si bien este no es un paso absolutamente necesario, si planea hacer algo más que una pequeña solución rápida, querrá asegurarse de mantener su bifurcación actualizada mediante el seguimiento del repositorio original (`upstream`) que bifurcó. Para hacer esto, necesitará agregar el repositorio [remoto](https://github.com/dolphinprojectsoftware/E-commerce_PHP):

```shell
# Add 'upstream' repo to list of remotes
git remote add upstream git@github.com:dolphinprojectsoftware/E-commerce_PHP.git

# Verify the new remote named 'upstream'
git remote -v
```

Siempre que quieras actualizar tu bifurcación con los últimos cambios del repositorio original (`upstream`), primero deberás recuperar las ramas del repositorio `upstream` y las últimas confirmaciones (`commits`) para traerlas a tu repositorio:

```shell
# Fetch from upstream remote
git fetch upstream

# View all branches, including those from upstream
git branch -va
```

Ahora, verifique su propia rama y la fusiona (`merge`) con la rama `develop` del repositorio `upstream`:

```shell
# Checkout your develop branch and merge upstream
git checkout develop
git merge upstream/develop
```

Si no hay `commits` en su rama local, git simplemente realizará un avance rápido (`fast-forward`). Sin embargo, si ha estado realizando cambios, es posible que tenga que lidiar con conflictos (`conflicts`). Al hacerlo, tenga cuidado de respetar los cambios realizados anteriormente.

Ahora, su rama local está actualizada con todas las modificaciones del repositorio `upstream`.

## Haciendo tu trabajo

### Crear una rama

Siempre que comience a trabajar en una nueva característica (`feature`) o corrección de errores (`hot-fix`), es importante que cree una nueva rama (`branch`). No solo es un flujo de trabajo de git adecuado, sino que también mantiene tus cambios organizados y separados de la rama de principal de desarrollo (`develop`) y de este modo puedas enviar y administrar fácilmente múltiples __peticiones de validación__ (`pull request`) para cada tarea que complete.

Para crear una nueva rama y comenzar a trabajar en ella:

```shell
# Checkout the develop branch - you want your new branch to come from develop
git checkout develop

# Create a new branch named new-feature (give your branch its own simple informative name)
git branch new-feature

# Switch to your new branch
git checkout new-feature
```

Ahora puedes hacer los cambios que quieras.

## Enviar un Pull Request (PR)

### Limpiando tu trabajo

Antes de enviar un `pull request`, es posible que desee hacer algunas cosas para limpiar su rama y hacer que sea lo más sencillo posible para el mantenedor del repositorio original testear, aceptar y fusionar su trabajo.

Si se han realizado `commits` en la rama principal de desarrollo `develop` del repositorio ascendente, debe __rebasar__ (`rebase`) su rama para que la fusión (`merging`) sea un simple __avance rápido__ (` fast-forward `) que no requiera ningún trabajo de __resolución de conflictos__.

```shell
# Fetch upstream master and merge with your repo's master branch
git fetch upstream
git checkout develop
git merge upstream/develop

# If there were any new commits, rebase your development branch
git checkout new-feature
git rebase develop
```

Ahora, puede ser deseable __aplastar/agrupar__ (`squash`) algunas de sus confirmaciones (`commits`) más pequeñas en un pequeño número de confirmaciones más grandes y cohesivos. Puede hacerlo con un __cambio de base interactivo__ (`interactive rebase`):

```shell
# Rebase all commits on your development branch
git checkout 
git rebase -i develop
```

Se abrirá un editor de texto en el que podrá especificar las confirmaciones que desea aplastar/agrupar.

### Solicitud de Incorporación de Cambios

Una vez que hayas confirmado y enviado todos tus cambios a GitHub, ve a la página de tu bifurcación en GitHub, selecciona tu rama de principal de desarrollo (`develop`) y haz clic en el botón __Comparar y solicitud de incorporación de cambios__.

Si necesita realizar algún ajuste en su pull request, simplemente envíe las actualizaciones a GitHub. Su pull request seguirá automáticamente los cambios en su rama de desarrollo y se actualizará.