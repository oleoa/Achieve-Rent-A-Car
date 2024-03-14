@extends('layouts.main')
@section('main')

  <article class="text-start md:px-margin px-4 py-4 space-y-4">
      
    @if($locale == 'pt')

      <h3>
        TERMOS E CONDIÇÕES
      </h3>

      <h4>
        LUCIANO & ABREU LDA, empresa localizada à Travessa do Lazareto, nº 9C, Cp 9060-162 - Funchal, doravante denominada Locadora e o Cliente que assina o presente Contrato de aluguer, doravante denominado Locatário, celebram o presente contrato de aluguer, regido pelos seguintes termos:
      </h4>

      <h5>
        1 - O Locatário declara expressamente que:
      </h5>

      <ul>
        <li>Recebeu a viatura com o depósito de combustível cheio e em perfeitas condições de utilização e funcionamento.</li>
        <li>Tem conhecimento de que a viatura somente deverá ser conduzida pelo Locatário e/ou pelo condutor adicional e que este último deve obrigatoriamente estar incluído neste contrato.</li>
        <li>Não utilizará a viatura para transportes de mercadorias em violação dos regulamentos alfandegários ou que sejam de qualquer forma ilegais.</li>
        <li>Não utilizará a viatura para transportes de mercadorias ou passageiros em troca de qualquer remuneração implícita ou explícita.</li>
        <li>Não fará sublocação da viatura.</li>
        <li>Não utilizará a viatura para puxar, empurrar ou rebocar qualquer veículo.</li>
        <li>Não utilizará a viatura para provas desportivas, Rally's ou competições.</li>
        <li>Não conduzirá e não permitirá que ninguém conduza a viatura sob o efeito de álcool ou narcóticos.</li>
        <li>Não fará troca de peças, acessórios, nenhuma alteração mecânica, elétrica, electrónica e/ou da estética da viatura.</li>
      </ul>

      <h5>
        2 - A viatura foi entregue com:
      </h5>
      
      <ul>
        <li>1 chave da viatura.</li>
        <li>1 jogo de tapetes de borracha.</li>
        <li>1 triângulo de sinalização, 1 colete reflector, 1 roda suplente ou 1 sistema de enchimento de pneus e 1 conjunto de ferramentas normais.</li>
        <li>1 cópia com selo branco do documento de circulação, 1 carta verde do seguro e 1 ficha de inspeção.</li>
      </ul>

      <h5>
        Em caso de perda ou destruição quaisquer dos itens abaixo, o Locatário deverá pagar à Locadora o valor do respetivo item, conforme segue:
      </h5>

      <ul>
        <li>Chave da viatura - 500€.</li>
        <li>Triângulo de sinalização - 15€.</li>
        <li>Jogo de tapetes de borracha - 40€.</li>
        <li>Colete reflector - 10€.</li>
        <li>Jante e pneu suplentes - 300€.</li>
        <li>Kit de sistema de enchimento de pneus - 50€.</li>
        <li>Chave de roda - 30€.</li>
        <li>Parafuso de roda, cada unidade - 5€.</li>
        <li>Macaco tesoura - 55€.</li>
        <li>Documentos da viatura, cada - 20€.</li>
      </ul>

      <h5>
        3 - Em caso de cancelamentos de reservas informados por e-mail, serão aplicadas as seguintes regras:
      </h5>
      <ul>
        <li>Até 72 horas antes do horário do levantamento, será reembolsado 100% do valor total, menos taxas.</li>
        <li>A menos de 72 horas antes do horário do levantamento, não haverá reembolso do valor pago.</li>
      </ul>

      <h5>
        Caso uma reserva tenha a data do seu levantamento adiada, o prazo a ser considerado em caso de cancelamento será a partir da primeira data e hora acordadas, anterior ao adiamento.
      </h5>

      <h5>
        4 - O período mínimo de aluguer a ser cobrado é de um dia (24H). Em casos de atrasos superiores a 1 hora na devolução do carro, será cobrado do Locatário um dia de aluguer extra. Este valor deverá ser pago no ato da devolução do carro.
        Sempre que levantamentos e/ou devoluções ocorram entre 06:01 PM e 07:59 AM, serão cobradas as tarifas de serviços fora de horas no valor de 20€ por cada evento, inclusive em casos de atrasos, adiantamentos, cancelamentos e ou desvios de voos ou por outros motivos, mesmo que a referida tarifa não tenha sido previamente inserida no orçamento e ou reserva e ou contrato.
        Caso o levantamento da viatura ocorra em data ou hora posterior ao especificado no contrato por motivos de atrasos, adiantamentos, cancelamentos e ou desvios de voos ou por outros motivos alheios à Locadora, o valor do contrato de aluguer permanecerá inalterado.
        Se o Locatário desejar alterar o horário de levantamento e ou o horário de devolução da viatura, deverá contactar a Locadora com uma antecedência mínima de 4 horas ao horário pretendido ou ao horário que está no contrato, o que resultar menor.
        A entrega prematura da viatura não incorrerá em reembolso de valores.
      </h5>

      <h5>
        5 - O condutor deve ter no mínimo 20 anos de idade e possuir carta de condução válida em Portugal, com no mínimo 2 anos de experiência.
        Uma taxa de 10€ por dia será automaticamente cobrada para condutores com 22 anos de idade ou menos e para condutores com 75 anos ou mais.
      </h5>

      <h5>
        6 - Combustível: o Locatário receberá a viatura com o depósito cheio e deverá devolvê-la da mesma forma.
        Caso devolva a viatura com o depósito incompleto, o Locatário pagará à Locadora o valor de 20€ para cada 1/4 de tanque de combustível em falta.
      </h5>
      
      <h5>
        7 - Os preços incluem: IVA, seguro Premium com cobertura para todos os riscos, manutenção e assistência em viagem 24h.
      </h5>

      <h5>
        8 - Os preços não incluem: despesas com Park, combustíveis, lavagens e coimas.
      </h5>

      <h5>
        9 - O seguro Premium possui cobertura para:
      </h5>

      <ul>
        <li>Responsabilidade civil, obrigatória e complementar.</li>
        <li>Acidentes pessoais para os ocupantes do veículo.</li>
        <li>Furto ou roubo do veículo.</li>
        <li>Incêndio, raio ou explosão.</li>
        <li>Choque, colisão e capotamento.</li>
        <li>Fenómenos da natureza e queda de aeronaves.</li>
        <li>Quebra de vidros.</li>
        <li>Greves, tumultos, comoções civis, vandalismo, atos de terrorismo.</li>
      </ul>

      <h5>O seguro Premium não cobre os itens abaixo e, caso ocorram, deverá o Locatário pagar à Locadora o respetivo valor no momento da devolução da viatura:</h5>
      <ul>
        <li>Abastecimento com combustível errado - taxa de 700€.</li>
        <li>Danos causados ao motor ou à caixa de velocidades ou à embreagem - terão os valores calculados de acordo com os danos, com as peças afetadas e com o modelo da viatura.</li>
        <li>Danos ao interior da viatura - terão os valores calculados de acordo com os danos e com as partes afetadas.</li>
        <li>Espelhos, fechaduras, jantes e pneus - terão os valores calculados de acordo com os danos e peças afetadas.</li>
        <li>Danos intencionais causados pelo locatário ou por pessoas sob sua responsabilidade ao veículo ou a terceiros - terão os valores calculados de acordo com os danos e peças afetadas.</li>
        <li>Danos por pessoa que esteja a conduzir sem autorização legal e/ou sem autorização da Locadora; sob o efeito de álcool, de estupefacientes ou por pessoa que sofra de insanidade mental - terão os valores calculados de acordo com os danos e peças afetadas.</li>
        <li>Danos por participações em provas desportivas, Rally's, desafios, concursos, competições - terão os valores calculados de acordo com os danos e peças afetadas.</li>
        <li>Danos por condução negligente, imperícia ou por má utilização da viatura - terão os valores calculados de acordo com os danos e peças afetadas.</li>
        <li>Danos por conduzir de forma a desrespeitar as leis e regras de trânsito local e ou de forma a desconsiderar os avisos das autoridades e das sinalizações de trânsito, de perigo ou de risco, por circular, estar parado ou estacionado em locais proibidos, por circular, estar parado ou estacionado em locais encerrados pelas autoridades - terão os valores calculados de acordo com os danos e peças afetadas.</li>
        <li>Danos por uso para empurrar ou rebocar qualquer veículo, reboque ou qualquer outro objeto - terão os valores calculados de acordo com os danos e peças afetadas.</li>
        <li>Danos ocorridos em:</li>
        <ul class="ps-6">
          <li>Transporte de passageiros ou mercadorias em troca de qualquer compensação, explícita ou implícita.</li>
          <li>Pelo transporte de passageiros e ou de mercadorias em violação do que, a propósito, esteja previsto nas características da viatura.</li>
          <li>Para o transporte de mercadorias proibidas ou ilegais, ou em violação das normas aduaneiras.</li>
        </ul>
        <li>Danos por acidentes que não sejam comunicados à Locadora e à polícia - terão os valores calculados de acordo com os danos e peças afetadas.</li>
        <li>Danos ou perdas de pertences do Locatário deixados no veículo.</li>
      </ul>

      <h5>
        Na ocorrência de qualquer dos casos acima descritos, o seguro Premium não terá efeito, devendo o Locatário pagar à Locadora todos os custos relativos aos danos causados, ao reboque da viatura até o local de reparação bem como a indemnização correspondente ao tempo de paragem da viatura sinistrada. Os valores serão apurados e apresentados ao Locatário.
        Os condutores são responsáveis por todas as infrações estradais que cometerem.
      </h5>

      <h5>
        10 - Os custos com reboque serão suportados pela Locadora em casos de problemas do veículo que não tenham sido causados pelo Locatário. Em situações como perda ou destruição da chave, falta de bateria devido ao esquecimento de luzes, rádio e ou outros itens eléctricos / electrónicos ligados, falta de combustível, atolamento ou danos aos pneus que ocorram por circulação fora de estradas de alcatrão e ou locais encerrados pelas autoridades e outras situações similares, o Locatário pagará os custos com o reboque e/ou com o socorro no valor de 100€.
      </h5>

      <h5>
        11 - Em caso de danos à viatura, acidente, roubo, furto ou incêndio, o Locatário deve:
      </h5>

      <ul>
        <li>Contactar a Locadora dentro das 24 horas seguintes, sob pena de assumir todos os danos caso não o faça, mesmo em caso de danos ou perdas menores. Deve fornecer à Locadora um relatório detalhado, incluindo uma descrição detalhada do ocorrido, solicitando o acionamento da Assistência em Viagem, sempre que justificado.</li>
        <li>Não se declarar responsável ou culpado pelo acidente perante as autoridades e/ou testemunhas.</li>
        <li>Tirar fotos dos veículos envolvidos, na posição em que se encontravam após o acidente, bem como dos danos causados a todos os veículos envolvidos.</li>
        <li>Chamar as autoridades (112 phone) e a ambulância caso existam feridos.</li>
        <li>Denunciar às autoridades policiais o roubo ou furto da viatura, bem como o acidente em que haja lesões corporais ou em que deva ser esclarecida a culpa da outra parte.</li>
        <li>Preencher a Declaração Amigável de Acidente Automóvel sempre que o acidente envolva terceiros.</li>
        <li>Obter dos outros condutores envolvidos:</li>
        <ul class="ps-6">
          <li>Nome, morada e nº de telefone.</li>
          <li>Nº da Carta de condução, data e local de emissão.</li>
          <li>Marca, modelo e matrícula dos outros veículos.</li>
          <li>Apólice de seguro e companhia de seguros dos outros veículos envolvidos.</li>
        </ul>
        <li>O Locatário obriga-se a cooperar com a Locadora e suas seguradoras em qualquer investigação ou processo judicial subsequente a qualquer acidente em que esteja envolvido.</li>
        <li>Tomar as medidas adequadas para a proteção da viatura antes de deixar o local do acidente.</li>
        <li>A Locadora não é responsável por acidentes que não sejam reportados à polícia.</li>
      </ul>

      <h5>
        Caso essas medidas não sejam tomadas pelo Locatário, o seguro Premium será totalmente nulo e sem efeito, devendo o Locatário arcar com todas as despesas.
      </h5>

      <h5>
        12 - O Locatário é responsável pela conservação do veículo e do respetivo equipamento, durante todo o período do aluguer, devendo verificar os níveis do óleo, do combustível, da água e a pressão dos pneus. Deve manter o veículo devidamente fechado e trancado fora do período de uso e não deixar objetos passíveis de furto, roubo ou danos ao veículo. Não é permitida a troca de peças e ou quaisquer componentes e ou acessórios do veículo. Não é permitida a sublocação do veículo alugado.
        Reparações ou intervenções no veículo só poderão ser efectuadas por empresas contratadas pela Locadora.
        Em caso de sujidade em excesso, além do esperado para o uso normal da viatura (interior e/ou exterior), será aplicada uma taxa de limpeza no valor de 15€.
      </h5>

      <h5>13 - O aluguer termina no dia e hora estabelecidos neste contrato de aluguer. Se o Locatário desejar prolongar o período de aluguer, deverá contactar a Locadora para atualizar o seu contrato de aluguer até 12 horas antes deste terminar. A Locadora reserva o direito de não prolongar o contrato. Em caso de não haver tal consentimento, considera-se que o veículo passa a circular sem autorização e contra a vontade do seu proprietário, sendo o facto punido por lei e da responsabilidade do condutor, sendo aplicada a taxa de incumprimento no valor de 100€, a que se somam o valor diário do aluguer e do seguro.</h5>

      <h5>14 - Caso o Locatário viole o Contrato de Aluguer, poderá a Locadora o fazer cessar imediatamente e sem aviso prévio e recuperar o veículo em quaisquer instalações ou localização, sendo o Locatário responsável e devendo indemnizar a Locadora contra todas as despesas, ações, queixas, custos e danos consequentes ou recorrentes desta mesma recuperação e retirada.</h5>

      <h5>15 - A Locadora não é responsável pela perda ou danos materiais causados a bens pessoais transportados ou deixados no veículo, quer durante o período de aluguer, quer após o mesmo.</h5>

      <h5>16 - O presente contrato de aluguer é feito e assinado com as leis de Portugal e por elas se rege. Ambas as partes acordam desde já que a resolução de qualquer litígio emergente do presente contrato, será competente o Tribunal Judicial da Comarca do Funchal. Em caso de litígio o consumidor pode recorrer ao centro de arbitragem de conflitos de consumo da Região Autónoma da Madeira. O Locatário pode apresentar a sua reclamação em https://www.livroreclamacoes.pt.</h5>

      <h5>17 - Declaro que autorizo à Locadora que proceda à recolha, processamento, tratamento e armazenamento de meus dados pessoais, nomeadamente nome, nº de identificação civil, nº de identificação fiscal, passaporte e dados da carta de condução. Os dados serão utilizados durante o tempo necessário à resolução do serviço contratado e permanecerão em arquivo para fins de cumprimento de obrigações legais, jurídicas e para prossecução de interesses legítimos da empresa. Os dados jamais serão compartilhados. Em caso de violação do presente contrato por parte do Locatário, os seus dados pessoais poderão ser comunicados ou revelados a terceiros na medida do necessário para a recuperação dos prejuízos relativos ao incumprimento.</h5>
      
    @elseif($locale == 'en')

      <h3>
        TERMS & CONDITIONS
      </h3>

      <h4>
        LUCIANO & ABREU LDA, Travessa do Lazareto, nº 9C, Cp 9060-162 - Funchal, called the Lessor and the Customer who signed this rental agreement, called the Lessee, enter into this rental agreement, governed by the following:
      </h4>

      <h5>
        1 - The Lessee expressly declares that:
      </h5>

      <ul>
        <li>Received the vehicle with a full fuel tank and in perfect condition of use and operation.</li>
        <li>Is aware that the vehicle must only be driven by the Lessee and/or the additional driver that must be included in this agreement.</li>
        <li>Will not use the vehicle to transport goods in violation of customs regulations or that are illegal in any way.</li>
        <li>Will not use the vehicle to transport goods or passengers in exchange for any implicit or explicit remuneration.</li>
        <li>Will not sublet the vehicle.</li>
        <li>Will not use the vehicle to pull, push or tow any vehicle.</li>
        <li>Will not use the vehicle for sporting events, rallies or competitions.</li>
        <li>Will not drive and will not allow anyone to drive the vehicle under the influence of alcohol or narcotics.</li>
        <li>Will not exchange parts, accessories, or any mechanical, electrical, electronic and/or aesthetic changes to the vehicle.</li>
      </ul>

      <h5>
        2 - The vehicle was delivered with:
      </h5>
      
      <ul>
        <li>1 vehicle key.</li>
        <li>1 set of rubber mats.</li>
        <li>1 warning triangle, 1 reflective vest, 1 spare wheel or 1 tire inflation system and 1 set of standard tools.</li>
        <li>1 certified copy of the vehicle's document, 1 insurance letter and 1 inspection form.</li>
      </ul>

      <h5>
        In case of loss or destruction of any of the items below, the Lessee will pay the Lessor the value of the respective item, plus administrative fees, as follows:
      </h5>

      <ul>
        <li>Vehicle key - €500.</li>
        <li>Warning triangle - €15.</li>
        <li>Set of rubber mats - €40.</li>
        <li>Reflective vest - €10.</li>
        <li>Spare wheel and tire - €300.</li>
        <li>Tire inflation system kit - €50.</li>
        <li>Wheel wrench - €30.</li>
        <li>Wheel bolt, each unit - €5.</li>
        <li>Scissor jack - €55.</li>
        <li>Vehicle documents, each one - €20.</li>
      </ul>

      <h5>
        3 - In case of cancellations informed by email, the following rules will apply:
      </h5>
      <ul>
        <li>Up to 72 hours before the pick-up time, 100% of the total amount will be refunded, minus fees.</li>
        <li>Less than 72 hours before the pick-up time, there will be no refund of the amount paid.</li>
      </ul>

      <h5>
        If a booking has its pick-up date postponed, the period to be considered in case of cancellation will be from the first agreed date and time, prior to the postponement.
      </h5>

      <h5>
        4 - The minimum rental period that can be paid is one day (24H). In cases of delays of more than 1 hour in returning the car, the Lessee will be charged one extra day's rental. This amount must be paid when returning the car.
        Whenever pick-ups and/or returns occur between 06:01 PM and 07:59 AM, an out-of-hours service fee of €20 will be charged for each event, including in cases of delays, advances, cancellations and/or deviations in flights or for other reasons, even if it has not previously been included in the quote and/or reservation and/or contract.
        If the vehicle is picked up on a date or time later than that specified in the contract due to delays, advances, cancellations and/or flight diversions or for other reasons beyond the control of the Lessor, the value of the rental contract will remain unchanged.
        If the Lessee wishes to change the pick-up time or the time for returning the vehicle, he must contact the Lessor at least 4 hours before the desired time or the time stated in the contract, whichever is shorter.
        Premature delivery of the vehicle will not result in refunds.
      </h5>

      <h5>
        5 - The driver must be at least 20 years old and must have a valid driving license in Portugal, with at least 2 years of experience.
        A fee of €10 per day will automatically be charged for drivers aged 22 or under and for drivers aged 75 or over.
      </h5>

      <h5>
        6 - Fuel: the Lessee will receive the vehicle with a full tank and must return it in the same way.
        If the vehicle is returned with an incomplete tank, the Lessee will pay the Lessor the amount of €20 for each 1/4 tank of fuel missing.
      </h5>
      
      <h5>
        7 - Prices include: VAT, Premium insurance with coverage for all risks, maintenance and 24-hour roadside assistance.
      </h5>

      <h5>
        8 - Prices do not include: Parking, fuel, washing and fines expenses.
      </h5>

      <h5>
        9 - Premium insurance covers:
      </h5>

      <ul>
        <li>Civil liability, mandatory and complementary.</li>
        <li>Personal accidents for vehicle occupants.</li>
        <li>Theft of the vehicle.</li>
        <li>Fire, lightning or explosion.</li>
        <li>Shock, collision and rollover.</li>
        <li>Natural phenomena and aircraft crashes.</li>
        <li>Breaking glass.</li>
        <li>Strikes, riots, civil commotions, vandalism, acts of terrorism.</li>
      </ul>

      <h5>Premium insurance does not cover the items below and if they occur, the Lessee must pay the Lessor the amounts mentioned when returning the vehicle:</h5>

      <ul>
        <li>Filling up with the wrong fuel - fee of €700.</li>
        <li>Damage to the engine/gearbox/clutch - the values will be calculated according to the damage and affected parts.</li>
        <li>Damage to the interior of the vehicle - the values will be calculated according to the damage and affected parts.</li>
        <li>Mirrors, locks, rims and tires - will have their values calculated according to the damage and affected parts.</li>
        <li>Intentional damage caused by the Lessee or people under his responsibility to the vehicle or third parties - will have the values calculated according to the damage and affected parts.</li>
        <li>Damage caused by a person driving without legal authorization and/or without authorization from the Lessor; under the influence of alcohol, drugs or by a person suffering from mental insanity - the values will be calculated according to the damage and affected parts.</li>
        <li>Damages for participation in sporting events, rallies, challenges, contests, competitions - the values will be calculated according to the damage and affected parts.</li>
        <li>Damage due to negligent driving, incompetence or misuse of the vehicle - the values will be calculated according to the damage and affected parts.</li>
        <li>Damages for driving in a manner that disregards local traffic laws and rules and or in a manner that disregards warnings from authorities and traffic, danger or risk signs, for driving, being stopped or parked in prohibited places, for driving, being stopped or parked in places closed by authorities - the values will be calculated according to the damage and affected parts.</li>
        <li>Damage from use to push or tow any vehicle, trailer or any other object - the values will be calculated according to the damage and affected parts.</li>
        <li>Damage occurred to:</li>
        <ul class="ps-6">
          <li>Transport of passengers or goods in exchange for any compensation, explicit or implicit.</li>
          <li>For the transport of passengers and/or goods in violation of what, by the way, is provided for in the characteristics of the vehicle.</li>
          <li>For the transport of prohibited or illegal goods, or in violation of customs regulation.</li>
        </ul>
        <li>Damage due to accidents that are not reported to the Lessor and the police- the values will be calculated according to the damage and affected parts.</li>
        <li>Damage or loss of Renter's belongings left in the vehicle.</li>
      </ul>

      <h5>
        In any of these cases, the insurance will not be effective, and the Lessee must pay the Lessor all costs related to the damage caused, the towing of the vehicle to the repair location as well as the compensation corresponding to the downtime of the damaged vehicle. The values will be calculated and presented to the Lessee.
        Drivers are responsible for all road infractions they commit.
      </h5>

      <h5>
        10 - Towing costs will be borne by the Lessor only in cases of vehicle problems that were not caused by the Lessee. In situations such as loss of the key, lack of battery due to forgotten lights, radio and/or other electrical/electronic items connected, lack of fuel, jamming or damage to tires that occur due to driving outside paved roads and/or places closed by the authorities and other similar situations, the Lessee will pay the costs of towing and/or assistance in the amount of €100.
      </h5>

      <h5>
        11 - In the event of damage to the vehicle, accident, theft, theft or fire, the Lessee must:
      </h5>

      <ul>
        <li>Contact the Lessor within the next 24 hours, under penalty of assuming all damages if you do not do so, even in the case of minor damage or loss, and provide the Lessor with a detailed report, including a detailed description of what happened, requesting that Assistance be called at Travel, whenever justified.</li>
        <li>Not declaring himself responsible or guilty for the accident before the authorities and/or witnesses.</li>
        <li>Take photos of the vehicles involved, in the position they were in after the accident, as well as the damage caused to all vehicles involved.</li>
        <li>Call the authorities (112 phone) and the ambulance if there are injuries.</li>
        <li>Report the theft of the vehicle to the police authorities, as well as any accident in which there are bodily injuries or in which the fault of the other party must be clarified.</li>
        <li>Fill out the “Car Accident Friendly Declaration” whenever the accident involves third parties.</li>
        <li>Obtain from the other drivers involved:</li>
        <ul class="ps-6">
          <li>Name, address and telephone number.</li>
          <li>Driving license number, date and place of issue.</li>
          <li>Make, model and registration number of other vehicles.</li>
          <li>Insurance policy and insurance company of the other vehicles involved.</li>
        </ul>
        <li>The Lessee is obliged to cooperate with the Lessor and its insurers in any investigation or legal process subsequent to any accident in which they are involved.</li>
        <li>Take appropriate measures to protect the vehicle before leaving the scene of the accident.</li>
        <li>The Lessor is not responsible for accidents that are not reported to the police.</li>
      </ul>

      <h5>
        If these measures are not taken by the Lessee, the Premium insurance will be completely null and void, and the Lessee must bear all expenses.
      </h5>

      <h5>
        12 - The Lessee is responsible for maintaining the vehicle and its equipment throughout the rental period, and must check the oil, fuel, water and tire pressure levels. He must keep the vehicle properly closed and locked outside of use and not leave objects that could be stolen or damaged in the vehicle. The exchange of parts or any components and/or accessories of the vehicle is not permitted. Subletting of the rented vehicle is not permitted.
        Repairs or interventions on the vehicle may only be carried out by companies contracted by the Lessor.
        In case of excessive dirt, beyond what is expected for normal use of the vehicle (interior and/or exterior), a cleaning fee of €15 will be applied.
      </h5>

      <h5>13 - The rental ends on the day and time established in this rental agreement. If the Lessee wishes to extend the rental period, he must contact the Lessor to update their rental agreement up to 12 hours before it ends. The Lessor reserves the right not to extend the agreement. If there is no such consent, it is considered that the vehicle starts to circulate without authorization and against the will of its owner, the fact being punished by law and the responsibility of the driver, with a non-compliance fee of €100 being applied, in addition to the daily rental and insurance costs.</h5>

      <h5>14 - If the Lessee violates the Rental Agreement, the Lessor may terminate it immediately and without prior notice and recover the vehicle at any facility or location, with the Lessee being responsible and must indemnify the Lessor against all expenses, actions, complaints, consequential or recurring costs and damages of this same recovery and withdrawal.</h5>

      <h5>15 - The Lessor is not responsible for loss or material damage caused to personal property transported or left in the vehicle, either during the rental period or after it.</h5>

      <h5>16 - This rental agreement is made and signed in accordance with the laws of Portugal and is governed by them. Both parties hereby agree that the Judicial Court of the District of Funchal will be competent to resolve any dispute arising from this contract. In the event of a dispute, the consumer can appeal to the consumer dispute arbitration center in the Autonomous Region of Madeira. The Lessee can submit their complaint at https://www.livroreclamacoes.pt.</h5>

      <h5>17 - I declare that I authorize the Lessor to collect, process and store my personal data, namely name, civil identification number, tax identification number, passport and driving license details. The data will be used for as long as necessary to complete the contracted service and will remain on file for the purpose of complying with legal and legal obligations and for pursuing the company's legitimate interests. The data will never be shared. In case of breach of this contract by the Lessee, their personal data may be communicated or revealed to third parties to the extent necessary to recover losses related to the breach.</h5>

    @endif

  </article>

@endsection
