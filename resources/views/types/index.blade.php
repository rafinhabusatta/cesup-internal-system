<x-app-layout>
<div class="container">
    <h1>Lista de Tipos de Usuários</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Função</th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
                <tr>
                    <td>{{ $type->funcao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
