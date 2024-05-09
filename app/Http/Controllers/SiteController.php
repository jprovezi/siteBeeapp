<?php

namespace App\Http\Controllers;

use App\Mail\contatoSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class SiteController extends Controller
{

    private function planos() : array 
    {
        return [
            "basic" =>[
                "Personalização da plataforma com a interface do cliente",
                "Acesso total à todas as funcionalidades da plataforma",
                "1 hora de mentoria de adequação da plataforma às necessidades do cliente",
                "Cloud em nuvem com capacidade de armazenagem gerenciada",
                "Disponibilidade de acesso para até 10 usuários",
                "Suporte técnico em horário comercial via plataforma Beeapp",
                "a partir do segundo ano, haverá cobrança apenas do custo da licença de uso da plataforma.",
            ],
            "standard" =>[
                "Oferece todas as funcionalidades do Plano Impulso",
                "Cloud com capacidade de armazenagem aprimorada",
                "Disponibilidade de acesso para até 50 / 100 / 200 usuários",
                "Gerenciador de Múltiplos Negócios para até 10 / 20 / 30 empresas",
                "1 sessão de treinamento especializado. (orçamento personalizado sob consulta)",
            ],
            "ultimate" =>[
                "Oferece personalização completa",
                "Cloud próprio e acessos ilimitados",
                "Gerenciador de Múltiplos Negócios ilimitado",
                "Serviços de programação",
                "Integrações avançadas",
                "Consultoria dedicada e suporte premium",
                "Sessões de treinamento especializado",
                "Atendendo às demandas de grandes empresas por eficiência e inovação (orçamento personalizado sob consulta). ",
            ],
        ];
    }

    private function funcionalidades() : array 
    {
        return[
            [
                "titulo" => "Gestão de Processos",
                "texto" => "Ferramentas intuitivas para mapear, executar e otimizar processos empresariais, garantindo eficiência operacional e o padrão de qualidade.",
            ],
            [
                "titulo" => "Feedbacks Documentados",
                "texto" => "Sistema centralizado para registrar e analisar feedbacks em tempo real, promovendo uma cultura de melhoria contínua.",
            ],
            [
                "titulo" => "Tarefas Procedimentadas",
                "texto" => "Facilita a colaboração em equipe com tarefas claramente definidas e procedimentos padronizados, aumentando a produtividade e a eficácia na execução.",
            ],
            [
                "titulo" => "Avaliação de Desempenho",
                "texto" => "Recursos avançados para avaliar o desempenho individual das pessoas e do negócio, identificando oportunidades de desenvolvimento.",
            ],
            [
                "titulo" => "Gerenciamento em Cloud",
                "texto" => "Solução baseada na nuvem, oferecendo acessibilidade, segurança e escalabilidade.",
            ],
            [
                "titulo" => "Colaboração e Treinamento",
                "texto" => "Plataforma projetada para fomentar a colaboração e facilitar treinamentos, essenciais para a capacitação de equipes.",
            ],
            [
                "titulo" => "Onboarding e Gestão de Cargos",
                "texto" => "Ferramentas para integrar novos colaboradores de forma eficaz e fazer associação de cargos garantindo a continuidade do trabalho.",
            ],
            [
                "titulo" => "Gestão da Informação",
                "texto" => "Repositório seguro para centralizar e gerenciar o conhecimento corporativo.",
            ],
            [
                "titulo" => "Gestão de Múltiplos Negócios",
                "texto" => "Tecnologia avançada para centralizar o gerenciamento de negócios ou projetos com necessidades de processos específicos.",
            ],
        ];
    }

    private function beneficios() : array 
    {
        return[
            [
                "titulo" => "Simplicidade e Eficiência",
                "texto" => "Interface intuitiva e recursos automatizados que simplificam operações complexas, economizando tempo e recursos.",
            ],
            [
                "titulo" => "Performance Organizacional Elevada",
                "texto" => "Com processos otimizados e uma equipe bem treinada, sua empresa alcançará níveis superiores de desempenho.",
            ],
            [
                "titulo" => "Desenvolvimento Contínuo",
                "texto" => "A avaliação de desempenho e os feedbacks documentados promovem o crescimento pessoal e profissional contínuo.",
            ],
            [
                "titulo" => "Cultura de Colaboração",
                "texto" => "Incentiva uma cultura empresarial onde a colaboração e o compartilhamento de conhecimentos são valorizados, fortalecendo o senso de comunidade.",
            ],
            [
                "titulo" => "Flexibilidade e Escalabilidade",
                "texto" => "Sendo uma solução em nuvem, adapta-se facilmente ao crescimento da sua empresa, sem necessidade de investimentos pesados em infraestrutura.",
            ],
            [
                "titulo" => "Acesso Universal",
                "texto" => "Acessível de qualquer lugar, a qualquer hora, facilitando o trabalho remoto e a gestão à distância.",
            ],
            [
                "titulo" => "Qualificação e Retenção de Talentos",
                "texto" => "Com uma forte ênfase no desenvolvimento e na avaliação de desempenho, a Beeapp ajuda a qualificar e reter talentos, criando equipes de alto desempenho.",
            ],
        ];
    }

    private function transformacoes() : array 
    {
        return[
            [
                "titulo" => "Otimização de Processos",
                "texto" => "A Beeapp permite que as empresas mapeiem e refinem seus processos, eliminando ineficiências e redundâncias. Isso resulta em operações mais enxutas e eficazes, reduzindo custos e aumentando a produtividade.",
            ],
            [
                "titulo" => "Automatização e Eficiência",
                "texto" => "Através da automatização de tarefas operacionais, a Beeapp libera as lideranças para se concentrarem em atividades de maior valor, melhorando a eficiência geral e a satisfação no trabalho.",
            ],
            [
                "titulo" => "Fortalecimento da Cultura de Feedback",
                "texto" => "Implementando um sistema estruturado de feedbacks documentados, a Beeapp promove uma cultura de comunicação aberta e melhoria contínua, essencial para o desenvolvimento pessoal e profissional.",
            ],
            [
                "titulo" => "Colaboração e Compartilhamento de Conhecimento",
                "texto" => "A plataforma incentiva a colaboração entre as equipes e facilita o compartilhamento de conhecimentos, fortalecendo os laços internos e a capacidade de inovação.",
            ],
            [
                "titulo" => "Desenvolvimento e Qualificação de Talentos",
                "texto" => "Através de avaliações de desempenho e ferramentas de treinamento, a Beeapp ajuda as empresas a identificar e desenvolver os talentos, alinhando as habilidades dos colaboradores com as necessidades do negócio.",
            ],
            [
                "titulo" => "Melhoria no Processo de Onboarding",
                "texto" => "A solução otimiza o processo de integração de novos colaboradores, garantindo que eles se familiarizem rapidamente com os processos e a cultura da empresa, o que aumenta a retenção de talentos.",
            ],
            [
                "titulo" => "Prevenção da Descontinuidade do Trabalho",
                "texto" => "A plataforma conta com um mecanismo exclusivo que permite ao gestor fazer a associação de cargos em situações de férias, demissões e absenteísmo.",
            ],
            [
                "titulo" => "Centralização e Gestão da Informação",
                "texto" => "Ao centralizar documentos, processos, feedbacks e avaliações, a Beeapp garante que o conhecimento organizacional seja preservado e facilmente acessado, melhorando a tomada de decisões.",
            ],
            [
                "titulo" => "Transparência e Acessibilidade",
                "texto" => "A natureza baseada na nuvem da solução, garante que as informações e ferramentas de gestão estejam acessíveis a todos os colaboradores, independentemente de sua localização, promovendo uma gestão transparente e inclusiva.",
            ],
            [
                "titulo" => "Elevação da Performance",
                "texto" => "Com processos otimizados, colaboradores bem treinados e engajados e uma gestão de conhecimento eficaz, a Beeapp impacta significativamente na performance organizacional.",
            ],
            [
                "titulo" => "Adaptabilidade e Crescimento",
                "texto" => "A flexibilidade e escalabilidade da Beeapp, permitem que as empresas se adaptem rapidamente às mudanças de mercado e cresçam de maneira sustentável, mantendo a eficiência operacional.",
            ],
            [
                "titulo" => "Controle das Operações em Múltiplos Locais",
                "texto" => "Poder estruturar e gerir processos específicos para vários negócios em um único lugar, além de simplificar, torna efetiva e singular a gestão de filiais ou franquias.",
            ],
            [
                "titulo" => "Compliance e Integridade",
                "texto" => "Com a Beeap, é simples elaborar e compartilhar todos os documentos e treinamentos para garantir o cumprimento dos requisitos do programa de compliance e conformidade com leis e regulamentações.",
            ],
        ];
    }    

    private function depoimentos() : array {
        return [
            [
                "nome" => "Gustavo Radin",
                "funcao" => "CEO - Agrosolos",
                "depoimento" => "Meu nome é Gustavo Radin e atualmente lidero as questões administrativas na empresa Agrossolos. Percebo que muitos dos processos da empresa ainda estão baseados em papel. No entanto, com a implementação do BeeApp, consegui trazer uma maior organização para estes processos documentais, resultando em uma melhoria significativa na estrutura organizacional da empresa.",
                "img" => "1.png",
            ],
            [
                "nome" => "Daniela Machado",
                "funcao" => "CEO - Luma Seguros",
                "depoimento" => "Fui apresentado ao sistema BeeApp pelo Ataliba e decidi implementá-lo na minha empresa, a Luma. A ferramenta tem sido extremamente valiosa, pois me permitiu organizar efetivamente os processos internos, estabelecendo os padrões necessários para a empresa. Esta mudança facilitou a comunicação e melhorou a organização da equipe de forma significativa.",
                "img" => "2.png",
            ],
            [
                "nome" => "Bruno Leal",
                "funcao" => "Diretor - Luma Seguros",
                "depoimento" => "O BeeApp representou uma verdadeira revolução para nossa corretora, introduzindo uma nova cultura e promovendo boas práticas operacionais. Desde a implementação da ferramenta, nossa eficiência operacional aumentou significativamente, elevando nossa produtividade de 20% para quase 100%. Esta solução tem simplificado consideravelmente nossas rotinas diárias e aprimorado o nosso desempenho de forma excepcional.",
                "img" => "3.png",
            ],
            [
                "nome" => "Flávio",
                "funcao" => "CEO - Wine's Life",
                "depoimento" => "O BeeApp atua como uma ponte entre o que necessita ser feito e o que realmente está em andamento. Atualmente, o BeeApp desempenha um papel fundamental no processo da Wines Life. Agradeço a todos os envolvidos por essa contribuição significativa.",
                "img" => "4.png",
            ],
        ];
    }

    public function main()
    {
        return view('site.main',[
            "funcionalidades" => $this->funcionalidades(),
            "beneficios" => $this->beneficios(),
            "transformacoes" => $this->transformacoes(),
            "planos" => $this->planos(),
            "depoimentos" => $this->depoimentos(),
        ]);
    }

    public function mensagemForm()
    {
        
        return view('site.main',[
            "porqueEscolheres" => $this->funcionalidades(),
            "beneficios" => $this->beneficios(),
            "transformacoes" => $this->transformacoes(),
            "planos" => $this->planos(),
            "depoimentos" => $this->depoimentos(),
            "mensagem" => true,
        ]);
    }

    public function formulario(Request $request){

        //Validando informacoes
        $request->validate([
            "nome" => ['required'],
            "email" => ['required'],
            "mensagem" => ['required'],
        ]);

        //Recebendo dados
        $dados = [
            "nome" => $request->nome,
            "email" => $request->email,
            "mensagem" => $request->mensagem,
        ];

        //Enviando email
        Mail::send(new contatoSite("jprovezi@gmail.com", "João Provezi", $dados));

        //redireciona o usuário
        return redirect('mensagem-enviada#contato');

    }
}
