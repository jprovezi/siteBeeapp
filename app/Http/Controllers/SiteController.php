<?php

namespace App\Http\Controllers;

use App\Mail\contatoSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{

    private function beneficios() : array {
        return [
            "Aumento da competitividade no mercado",
            "Facilitação da colaboração e comunicação",
            "Redução de custos",
            "Redução de erros e defeitos",
            "Conformidade regulatória",
            "Gestão proativa de riscos",
            "Padronização e consistência",
            "Melhoria da qualidade dos produtos e serviços",
            "Aumento da satisfação do cliente",
            "Agilidade e adaptabilidade",
            "Aumento da produtividade dos funcionários",
            "Satisfação e engajamento dos funcionários",
            "Melhoria da gestão de terceirizados",
            "Melhoria na gestão da operação em múltiplos locais",
            "Auditorias simplificadas e eficientes",
            "Adoção de práticas de melhoria e contínua",
        ];        
    }

    private function planos() : array {
        return [
            "basic" =>[
                "Instalação e customização da plataforma",
                "Treinamento da plataforma",
            ],
            "standard" =>[
                "Instalação e customização da plataforma",
                "Treinamento da plataforma",
                "Consultoria da sua empresa com o Beeapp",
                "Assessoria da sua empresa com o Beeapp",
            ],
            "ultimate" =>[
                "Instalação e customização da plataforma",
                "Treinamento da plataforma",
                "Consultoria da sua empresa com o Beeapp",
                "Assessoria da sua empresa com o Beeapp",
                "Padronização dos documentos",
                "Implementação e acompanhamento interno",
                "Horas de programação para adequação interna do seu negócio",
            ],
        ];
    }

    private function porqueEscolher() : array {
        return[
            [
                "icone" => "bx bx-check-shield",
                "titulo" => "Gestão de compliance",
                "texto" => "Registre, acompanhe e resolva não conformidades de forma eficiente.",
            ],
            [
                "icone" => "bx bxs-graduation",
                "titulo" => "Treinamento e capacitação",
                "texto" => "Organize e execute cursos e treinamentos da sua empresa em qualquer formato, diminuindo
                custos e tempo dos gestores.",
            ],
            [
                "icone" => "bx bx-like",
                "titulo" => "Feedback em tempo real",
                "texto" => "Acompanhe a jornada do seu colaborador, registrando as ocorrências e avanços, levando
                orientações valiosas.",
            ],
            [
                "icone" => "bx bx-task",
                "titulo" => "Tarefas procedimentadas",
                "texto" => "Delegue tarefas e responsabilidade e gerencie o tempo e a conformidade na execução do
                trabalho das equipes.",
            ],
            [
                "icone" => "bx bx-layout",
                "titulo" => "Sistemas personalizados",
                "texto" => "Nossa plataforma será totalmente personalizada com seu layout e com a estrutura de àreas e
                cargos do seu negócio.",
            ],
            [
                "icone" => "bx bx-group",
                "titulo" => "Gestão de terceirizados",
                "texto" => "Gerencie os processos e controle o trabalho de seus prestadores de serviços, garantindo
                conformidade na execução.",
            ],
            [
                "icone" => "bx bx-brain",
                "titulo" => "Onboarding facilitado",
                "texto" => "Em um clique você transfere todas as funções e processos de um cargo para outra pessoa da
                equipe e evita a descontinuidade do trabalho.",
            ],
            [
                "icone" => "bx bxs-file-doc",
                "titulo" => "Customização de documentos",
                "texto" => "Distribua os documentos e conhecimento da sua empresa de forma que apenas usuários daquele
                cargo ou setor, tenham acesso a ele.",
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
            "porqueEscolheres" => $this->porqueEscolher(),
            "beneficios" => $this->beneficios(),
            "planos" => $this->planos(),
            "depoimentos" => $this->depoimentos(),
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
        Mail::send(new contatoSite("jprovezi@gmail.com", $dados));

        //redireciona o usuário
        return redirect(route('mensagem-enviada'));

    }
}
