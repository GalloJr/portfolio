<?php

    $projects = [
        
        [
            'title' => 'DOKS',
            'url' => 'https://doks.com.br',
            'description' => 'Plataforma de gestão de plantões médicos, com controle de plantões, hospitais e notificações',
            'image' => 'assets/doks.png',
            'techs' => ['TypeScript', 'React', 'PostgreSQL', 'JavaScript']
        ],
        [
            'title' => 'PrintAdmin3D',
            'url' => 'https://printadmin3d.onrender.com/',
            'description' => 'Sistema de gerenciamento para empresas de impressão 3D, com controle de pedidos, clientes e impressoras',
            'image' => 'assets/PrintAdmin3D.png',
            'techs' => ['TypeScript', 'CSS', 'JavaScript', 'PostgreSQL']
        ],
        [
            'title' => 'Guardiões MC',
            'url' => 'https://guardioesmc.vercel.app/',
            'description' => 'Sistema de gerenciamento para Guardiões Moto Clube, com controle de membros, finanças, viagens, eventos e atividades',
            'image' => 'assets/MCAdmin.png',
            'techs' => ['TypeScript', 'CSS', 'PostgreSQL']
        ],
        [
            'title' => 'Bluetooth Battery Monitor',
            'description' => 'O Bluetooth Battery Monitor é uma ferramenta leve e altamente personalizável para Windows que exibe o nível de bateria do seu dispositivo Bluetooth principal (teclado, mouse, fone) diretamente na bandeja do sistema.',
            'image' => 'assets/bluetooth_battery_monitor.png',
            'techs' => ['C#']
        ],
        [
            'title' => 'VeicAi',
            'url' => 'https://studio-8071776082-3c93f.web.app/',
            'description' => 'Plataforma completa para gerenciamento de veículos e frotas com IA integrada',
            'image' => 'assets/veicai.png',
            'techs' => ['TypeScript', 'React', 'PostgreSQL', 'JavaScript']
        ],
        [
            'title' => 'OurWallet',
            'url' => 'https://our-wallet-14998929-dc6cf.web.app/',
            'description' => 'Sistema SaaS que permite controlar receitas, despesas, cartões de crédito, dívidas e metas financeiras, com interface intuitiva e recursos avançados de análise.',
            'image' => 'assets/ourWallet.png',
            'techs' => ['Firebase', 'CSS', 'JavaScript']
        ],
        [
            'title' => 'My RDP Manager',
            'url' => 'https://my-rdp-manager.vercel.app/',
            'description' => 'Um aplicativo desktop moderno e seguro para gerenciar e conectar rapidamente aos seus servidores via RDP.',
            'image' => 'assets/rdp_manager.png',
            'techs' => ['Electron', 'SQLite', 'PostgreSQL', 'HTML', 'CSS', 'JavaScript']
        ]
    ];

?>

<section class="pt-14 sm:pt-16 px-4 sm:px-6">
    <!-- titles -->
    <div class="text-center mb-10 sm:mb-14">
        <h1 class="text-[#E3646E] mb-2 text-[18px] sm:text-[20px] font-[inconsolata]">Meu trabalho</h1>
        <p class="text-[#E2E4E9] font-bold text-[22px] sm:text-[24px] font-[asap]">Veja os projetos em destaque</p>
    </div>
    <!-- projects -->
    <div class="mx-auto max-w-[1200px]">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 pb-10 sm:pb-14">
            <?php foreach ($projects as $p): ?>
                <div class="flex flex-col sm:flex-row bg-[#292C34] p-3 rounded-[12px] border border-transparent hover:border-gray-200 shadow-lg shadow-slate-900 transition-colors">
                    <div class="mb-4 sm:mb-0 w-full sm:w-2/5 lg:w-2/5">
                        <a href="<?=$p['url'] ?? '#';?>" target="_blank" rel="noopener noreferrer">
                            <img class="h-full w-full rounded-lg object-cover" src="<?=$p['image']?>" alt="<?=$p['title']?>">
                        </a>
                    </div>
                    <div class="w-full sm:w-3/5 sm:pl-4 space-y-3">
                        <h3 class="text-[#E2E4E9] font-bold font-[asap] text-[16px]"><?=$p['title']?></h3>
                        <p class="text-[#C0C4CE] font-[maven pro] text-[14px] leading-[140%]"><?=$p['description']?></p>
                        <div class="flex flex-wrap gap-2 mt-3 sm:mt-5">
                            <?php 
                                $colors = ['#BB72E9', '#3996DB', '#E3646E', '#EABD5F', '#6FCF97', '#F2994A', '#56CCF2', '#2F80ED', '#9B51E0', '#27AE60'];
                                foreach ($p['techs'] as $i => $tech): ?>
                            <span class="bg-[<?=$colors[$i]?>] text-black rounded-md px-2 py-1 font-semibold text-xs"><?=$tech?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>