<?php the_post();

get_header(); ?>

<main class="page-empreendimentos">
    <hr>
    <div class="container">
        <nav class="filtro-status">
            <button class="filtro-statu">Todos</button>
            <?php 
                $filtrosStatus = get_terms( array(
                    'taxonomy'   => 'filtro-statu',
                    'hide_empty' => true,
                ) );
                foreach ($filtrosStatus as $filtro) {
            ?>
            <button class="filtro-statu" onclick="filtroStatus(<?= $filtro->term_id ?>)"><?= $filtro->name ?></button>
            <?php
                }
            ?>
        </nav>
        <div class="filtros-bases">
            <div class="filtro-cidades">
                <select name="" id="filtroCidades">
                    <option value="" selected >Todas as cidades</option>
                    <?php 
                        $filtrosCidades = get_terms( array(
                            'taxonomy'   => 'filtro-cidade',
                            'hide_empty' => true,
                        ) );
                        foreach ($filtrosCidades as $filtro) {
                    ?>
                    <option value=""><?= $filtro->name ?></option>
                    <?php
                            # code...
                        }
                    ?>
                </select>
            </div>
            <div class="filtro-tipos">
                <select name="" id="filtroTipos">
                    <option value="" selected >Todos os tipos</option>
                    <?php 
                        $filtrosTipos = get_terms( array(
                            'taxonomy'   => 'filtro-tipo',
                            'hide_empty' => true,
                        ) );
                        foreach ($filtrosTipos as $filtro) {
                    ?>
                    <option value=""><?= $filtro->name ?></option>
                    <?php
                            # code...
                        }
                    ?>
                </select>
            </div>
            <div class="filtro-dorms">
                <select name="" id="filtroDorms">
                    <option value="" selected >Número de dormitórios</option>
                    <?php 
                        $filtrosDorms = get_terms( array(
                            'taxonomy'   => 'filtro-dormitorio',
                            'hide_empty' => true,
                        ) );
                        foreach ($filtrosDorms as $filtro) {
                    ?>
                    <option value=""><?= $filtro->name ?></option>
                    <?php
                            # code...
                        }
                    ?>
                </select>
            </div>
            <div class="filtro-metragem">
                <label for="filtroMetragem">Metragem:</label>
                <input type="range" name="filtroMetragem" id="filtroMetragem" min="0" max="200" value="0">
                <div class="valores-metragem">
                    <span>0m²</span>
                    <span id="valorFiltrar">0m²</span>
                </div>
            </div>
            <div class="limpar-filtros">
                <button class="limparFiltros">Limpar<br>Filtros</button>
            </div>
        </div>
        <h2>Conheça os projetos que elevam o padrão de viver bem.</h2>
        <div class="listarEmpreendimentos">
            <div class="row" id="app-empreendimentos">

            </div>
        </div>
    </div>
</main>





<?php get_footer() ?>