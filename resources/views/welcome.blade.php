<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO Git Branch Título</title>
</head>
<body>
    <h1>Merge da branch master com a branch titulo</h1>
    <ul>
        <li>Vagrant: Gerenciamento Máquinas Virtuais</li>
        <li>Docker: Criando containers sem dor de cabeça</li>
        <li>Ansible:  Sua infraestrutura como código</li>
        <li>Integração Contínua: Maturidade e Produtividade no Desenvolvimento de Software</li>
        <li>Kubernetes: Introdução a orquestração de conteiners</li>
    </ul>
    <ul>
        <li>git stash
            <ul>
                <li>git stash - salva temporariamente numa lista</li>
                <li>git stash list - exibe status armazenados</li>
                <li>git stash apply 0 - adiciona novamente infos salvas nessa posicao e mantem na llista </li>
                <li>git stash drop - limpa a lista</li>
                <li>git stash pop - remove da lista e faz o merge das modificacoes salvas</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li>git checkout
            <ul>
                <li>git checkout log - recupera um estado do projeto na linha do tempo - desacoplado</li>
                <ul>
                    <li>Se não criar um novo branch o head fica perdido, e qualquer alteração será desacoplada da linha do tempo, sem possibilidade de recuperar depois</li>
                </ul>
                <li>git checkout -b novo_branch - para criar um novo branch a partir daquela linha temporal e manter no historico</li>
                <li>git log -p = commit por commit</li>
                <li>git log --oneline = log reduzido</li>
                <li>git diff = compara dois commits
                    <ul>
                        <li>git diff 3cbe3ce..809340c</li>
                        <li>
                            <figure>
                                <img src="{{asset('print_diff.PNG')}}">
                            </figure>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <ul>
        <li>git tag
            <ul>
                <li>git tag -a versao [0.0.0] = lançamento de versão</li>
                <li>git tag = listar versões</li>
                <li>git push origin master --tags = subir alteracoes para o servidor e a tag</li>
            </ul>
        </li>
    </ul>
<footer class="footer">Rodapé Curso git</footer>
</html>
