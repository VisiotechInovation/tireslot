<x-store-head :canonical="'terms'" :title='" Termeni si Conditii"' :description='"Termeni și conditii"'/>
@livewire('store-header')
<main>
	<!---------------------------------------------------------->
	<!------------------------Breadcrumbs----------------------->
	<div class="breadcrumbs container">
		<a class="breadcrumbs__link" href="{{ url("/") }}">
			Acasă
		</a>
		<a class="breadcrumbs__link" href="{{ url("/terms") }}">
			Termeni si conditii
		</a>
	</div>
	<!----------------------End Breadcrumbs--------------------->
	<!---------------------------------------------------------->
	<!----------------------Section Header---------------------->
	<section class="section__header container">
		<h1 class="section__title">TERMENI SI CONDITII</h1>
		<p class="section__text">
			Magazinul online <a href="{{ url("/") }}" target="_blank">noren.ro</a> (”magazin online”, ”site”) este deținut și operat de Moldaso Line S.R.L.
			(”vânzătorul”), cu sediul social în București, Sectorul 1, str. Bulevardul Bucureștii Noi, Nr. 50A, bl.
			Tronson A+C, et.10, ap. 64, având număr de ordine în Registrul Comerțului J40/15607/15.11.2019 cod unic de
			înregistrare fiscală RO41903669
		</p>
	</section>
	<!--------------------End Section Header-------------------->
	<!---------------------------------------------------------->
	<!--------------------Terms & Conditions-------------------->
  <section class="container contract__container">
    <div class="contract">
        <h4 class="contract__subtitle">CONTRACTUL</h4>
        <p class="contract__descr">
            Prin accesarea siteului, înregistrarea unui cont pe site sau
            prin plasarea unei comenzi,declarați că aveți vârsta de 16 ani.
        </p>
        <p class="contract__descr">
            Prin inregistrarea unei comenzi pe site, utilizatorul este de acord cu forma de
            comunicare (telefonic sau e-mail) în vederea operațiunilor aferente livrării
            comenzii.
        </p>
        <p class="contract__descr">
            Notificarea primita de catre utilizator, dupa efectuarea comenzii are rol de
            informare si nu reprezinta acceptarea comenzii. Aceasta notificare se face electronic
            (e-mail) sau telefonic.
        </p>
        <p class="contract__descr">
            Pentru motive justificate, vanzatorul isi rezerva dreptul de a modifica
            cantitatea bunurilor si/sau serviciilor din comanda. Daca modifica cantitatea de bunuri
            si/sau servicii din comanda va anunta utilizatorul la adresa de e-mail sau la numarul
            de telefon puse la dispozitia vanzatorului la efectuarea comenzii si va returna suma
            achitata aferenta modificarii cantitatilor.
        </p>
        <p class="contract__descr">
            Contractul se considera incheiat intre vanzator si utilizator in momentul
            primirii de catre utilizator de la vanzator, prin intermediul postei electronice si/sau
            SMS a notificarii de expediere a comenzii.
        </p>
        <p class="contract__descr">
            Documentul si informatiile puse la dispozitie de catre vanzator pe site vor sta
            la baza contractului.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">POLITICA DE VANZARE ONLINE</h4>
        <p class="contract__descr">
            Accesul in vederea efectuarii unei comenzii ii este permis oricarui
            utlizator/client/cumparator.
        </p>
        <p class="contract__descr">
            Pentru motive justificate Moldaso Line S.R.L isi rezerva dreptul de a restrictiona accesul
            clientului/cumparatorului in vederea efectuarii unei comenzi si/sau la unele din modalitatile de plata
            acceptate, in cazul in care considera ca in baza conduitei sau a activitatii clientului/cumparatorului
            pe site, actiunile acestuia ar putea prejudicia in vreun fel Moldaso Line S.R.L sau ar incalca
            legislatia aplicabila. In oricare dintre aceste cazuri, clientul/cumparatorul se poate adresa
            magazinului online, pentru a fi informat cu privire la motivele care au condus la aplicarea masurilor
            sus mentionate.
        </p>
        <p class="contract__descr">
            Comunicarea cu vanzatorul se poate realiza prin adresele mentionate la sectiunea “contact” din Site.
        </p>
        <p class="contract__descr">
            Toate tarifele aferente bunurilor si/sau serviciilor prezentate pe site sunt exprimate in lei (RON) si
            includ T.V.A., cu excepția situațiilor în care este indicat altfel.
        </p>
        <p class="contract__descr">
            In cazul platilor online vanzatorul nu este/nu poate fi facut responsabil pentru niciun alt cost
            suplimentar suportat de cumparator, incluzand dar nelimitandu-se la comisioane de conversie valutara
            aplicate de catre banca emitenta a cardului acestuia, in cazul in care moneda de emitere a acestuia
            difera de RON. Responsabilitatea pentru aceasta actiune o poarta numai cumparatorul.
        </p>
        <p class="contract__descr">
            Toate informatiile folosite pentru descrierea bunurilor si/sau a serviciilor disponibile pe Site
            (imagini statice / dinamice / prezentari multimedia / etc.) nu reprezinta o obligatie contractuala din
            partea vanzatorului, acestea fiind utilizate exclusiv cu titlu de prezentare.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">CESIONAREA SI SUBCONTRACTAREA</h4>
        <p class="contract__descr">
            Vanzatorul poate cesiona si/sau subcontracta o terta parte pentru servicii ce tin de onorarea comenzii,
            nefiind necesar acordul acestuia.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">DREPTUL DE PROPRIETATE INTELECTUALA SI INDUSTRIALA</h4>
        <p class="contract__descr">
            Întreg continutul <a href="{{ url("/") }}" target="_blank">www.noren.ro</a>, incluzand dar nelimitandu-se la
            logo-uri, reprezentari stilizate,
            symboluri comerciale, imagini statice, imagini dinamice, text si/sau continut multimedia prezentate pe
            site, sunt proprietatea exclusiva a Moldaso Line S.R.L acestuia fiindu-i rezervate toate drepturile
            obtinute in acest sens in mod direct sau indirect (prin licente de utilizare si/sau publicare).
        </p>
        <p class="contract__descr">
            Utilizatorului / clientului / cumparatorului nu ii este permisa copierea, distribuirea, publicarea,
            transferul catre terte parti, modificarea si/sau altfel alterarea, utilizarea, legarea la, expunerea,
            includerea oricarui continut in orice alt context decat cel original intentionat de Moldaso Line S.R.L,
            includerea oricarui continut in afara site-ului, indepartarea insemnelor care semnifica dreptul de autor
            al Moldaso Line S.R.L. asupra continutului precum si participarea la transferul, vanzarea, distributia
            unor materiale realizate prin reproducerea, modificarea sau afisarea continutului, decat cu acordul
            scris expres al Moldaso Line S.R.L..
        </p>
        <p class="contract__descr">
            Orice continut la care utilizatorul / clientul / cumparatorul are si/sau obtine acces prin orice mijloc,
            se afla sub incidenta prezentelor termeni și condiții, in cazul in care continutul nu este insotit de un
            acord de utilizare specific si valid incheiat intre Moldaso Line S.R.L. si acesta, si fara nicio
            garantie implicit sau expres formulata din partea Moldaso Line S.R.L. cu referire la acel continut.
        </p>
        <p class="contract__descr">
            Niciun continut transmis catre client sau cumparator, prin orice mijloc de comunicare (electronic,
            telefonic, etc) sau dobandit de acesta prin accesare, vizitare si/sau vizualizare nu constituie o
            obligatie contractuala din partea Moldaso Line S.R.L. si/sau al angajatului/prepusului Moldaso Line
            S.R.L. care a mijlocit transferul de continut, in cazul in care aceasta exista, fata de respectivul
            continut.
        </p>
        <p class="contract__descr">
            Este interzisa orice utilizare a continutului in alte scopuri decat cele permise expres prin prezentele
            Termeni și Condiții sau de acordul de utilizare care il insoteste, in cazul in care acesta exista.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">COMANDA</h4>
        <p class="contract__descr">
            Utilizatorul / clientul poate efectua comenzi pe site, prin adaugarea bunurilor si/sau serviciilor
            dorite in cosul de cumparaturi, urmand a finaliza comanda efectuand plata prin una dintre modalitatile
            indicate expres. Adaugarea unui bun/serviciu in cosul de cumparaturi, in lipsa finalizarii comenzii, nu
            atrage dupa sine inregistrarea unei comenzi, implicit nici rezervarea automata a bunului/serviciului.
        </p>
        <p class="contract__descr">
            Prin finalizarea comenzii utilizatorul / clientul consimte ca toate datele furnizate de acesta, necesare
            procesului de cumparare, sunt corecte, complete si adevarate la data plasarii comenzii.
        </p>
        <p class="contract__descr">
            Prin finalizarea comenzii, utlizatorul consimte ca vanzatorul poate sa il contacteze, prin orice mijloc
            pus la dispoziția vanzatorului, in orice situatie in care este necesara contactarea utilizatorului, în
            vederea prestării serviciului solicitat de utilizator.
        </p>
        <p class="contract__descr">
            Vanzatorul poate anula comanda efectuata de catre utilizator / client, in urma unei notificari
            prealabile adresate cumparatorului, fara nicio obligatie ulterioara a vreunei parti fata de cealalta sau
            fara ca vreo parte sa poata sa pretinda celeilalte daune-interese in urmatoarele cazuri:
        </p>
        <p class="contract__descr">
            – neacceptarea de catre banca emitenta a cardului utilizatorului / clientului, a tranzactiei, in cazul
            platii online;
        </p>
        <p class="contract__descr">
            – invalidarea tranzactiei de catre procesatorul de carduri agreat de vanzator, in cazul platii online;
        </p>
        <p class="contract__descr">
            – datele furnizate de catre client/cumparator, pe site sunt incomplete si/sau incorecte;
        </p>
        <p class="contract__descr">
            Cumparatorul are dreptul sa se retraga din contract, respectiv sa returneze un bun sau sa renunțe la un
            serviciu, în termen de 14 zile calendaristice, fara invocarea niciunui motiv si fara a suporta alte
            costuri decât cele de livrare.
        </p>
        <p class="contract__descr">
            Astfel, potrivit OUG nr. 34/2014, perioada de returnare a unui bun sau renunțare la un serviciu expiră
            în termen de 14 zile de la:
        </p>
        <p class="contract__descr">
            – ziua în care cumparatorul intră în posesia fizică a ultimului bun – în cazul în care cumparatorul
            comandă printr-o singură comandă produse multiple care vor fi livrate separat
        </p>
        <p class="contract__descr">
            – ziua în care cumparatorul intră în posesia fizică a ultimului bun sau a ultimei piese – în cazul
            livrării unui produs care constă din mai multe loturi sau piese.
        </p>
        <p class="contract__descr">
            In cazul in care cumparatorul decide sa se retraga din contract, acesta va contacta vanzatorul la datele
            de contact puse la dispoziție pe Site.
        </p>
        <p class="contract__descr">
            In cazul in care clientul/cumparatorul solicita retragerea din contract in cadrul termenului legal de
            retragere din contract, trebuie sa returneze si eventualele cadouri care au insotit produsul respectiv.
            In cazul in care comanda este achitata, vanzatorul va rambursa suma in maxim 14 (paisprezece) zile de la
            data informarii vanzatorului de catre cumparator asupra deciziei sale de retragere din Contract. Suma va
            fi returnata dupa cum urmeaza:
        </p>
        <p class="contract__descr">
            – pentru comenzile achitate cu card online – prin restituire in contul din care a fost efectuata plata;
        </p>
        <p class="contract__descr">
            – pentru comenzile achitate cu OP/ramburs/Transfer – prin virament bancar.
        </p>
        <p class="contract__descr">
            Vanzatorul va putea amana rambursarea sumei pana la primirea bunurilor vandute sau pana la primirea unei
            dovezi conform careia acestea au fost expediate, in cazul in care nu s-a oferit sa recupereze el insusi
            bunurile (se va lua data cea mai recenta).
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">BUNURI/SERVICII PENTRU CARE NU SE ASIGURA DREPTUL DE RETRAGERE</h4>
        <p class="contract__descr">
            Potrivit legislației aplicabile, sunt exceptate de la dreptul de retragere din contract următoarele:
        </p>
        <p class="contract__descr">
            – contractele de prestări de servicii, după prestarea completă a serviciilor, dacă executarea a început
            cu acordul prealabil expres al consumatorului şi după ce acesta a confirmat că a luat cunoştinţă de
            faptul că îşi va pierde dreptul la retragere după executarea completă a contractului de către
            profesionist;
        </p>
        <p class="contract__descr">
            – furnizarea de produse sau servicii al căror preţ depinde de fluctuaţiile de pe piaţa financiară pe
            care profesionistul nu le poate controla şi care pot avea loc pe parcursul perioadei de retragere;
        </p>
        <p class="contract__descr">
            – furnizarea de produse confecţionate după specificaţiile prezentate de consumator sau personalizate în
            mod clar;
        </p>
        <p class="contract__descr">
            – furnizarea de produse care sunt susceptibile a se deteriora sau a expira rapid;
        </p>
        <p class="contract__descr">
            – furnizarea de produse sigilate care nu pot fi returnate din motive de protecţie a sănătăţii sau din
            motive de igienă şi care au fost desigilate de consumator;
        </p>
        <p class="contract__descr">
            – furnizarea de produse sigilate care nu pot fi returnate din motive de protecţie a sănătăţii sau din
            motive de igienă şi care au fost desigilate de consumator;
        </p>
        <p class="contract__descr">
            – furnizarea de băuturi alcoolice al căror preţ a fost convenit în momentul încheierii contractului de
            vânzare, a căror livrare nu poate fi efectuată înainte de 30 de zile şi a căror valoare reală depinde de
            fluctuaţiile de pe piaţă pe care profesionistul nu le poate controla;
        </p>
        <p class="contract__descr">
            – contractele în cazul cărora consumatorul a solicitat în mod special profesionistului să se deplaseze
            la domiciliul său pentru a efectua lucrări urgente de reparaţie sau de întreţinere. Dacă, cu ocazia unei
            astfel de vizite, profesionistul prestează alte servicii în afara celor solicitate în mod expres de
            consumator sau furnizează alte produse decât piesele de schimb indispensabile pentru executarea
            lucrărilor de întreţinere sau de reparaţie, dreptul de retragere se aplică respectivelor servicii sau
            produse suplimentare;
        </p>
        <p class="contract__descr">
            – furnizarea de înregistrări audio sau video sigilate sau de programe informatice sigilate care au fost
            desigilate după livrare;
        </p>
        <p class="contract__descr">
            – furnizarea de ziare, periodice şi reviste, cu excepţia contractelor de abonament pentru furnizarea de
            astfel de publicaţii;
        </p>
        <p class="contract__descr">
            – contractele încheiate în cadrul unei licitaţii;
        </p>
        <p class="contract__descr">
            – prestarea de servicii de cazare, pentru alt scop decât cel rezidenţial, transport de mărfuri,
            închiriere de maşini, catering sau serviciile privind activităţile de agrement, în cazul în care
            contractul prevede o dată sau o perioadă de executare specifică;
        </p>
        <p class="contract__descr">
            – furnizarea de conţinut digital care nu este livrat pe un suport material, dacă prestarea a început cu
            acordul prealabil expres al consumatorului şi după ce acesta a confirmat că a luat cunoştinţă de faptul
            că îşi va pierde dreptul la retragere.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">PRELUCRAREA DATELOR CU CARACTER PERSONAL</h4>
        <p class="contract__descr">
            Politica de confidențialitate cu privire la prelucrarea datelor cu caracter personal poate fi consultată
            aici, fiind parte integrantă din prezentul document.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">COOKIE</h4>
        <p class="contract__descr">
            Politica de cookies poate fi consultată
            <a href="{{ url("/cookie") }}" target="_blank">
                aici
            </a>
            , fiind parte integrantă din prezentul document.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">COMUNICĂRI COMERCIALE</h4>
        <p class="contract__descr">
            Comunicările comerciale ale noren.ro sunt transmise de catre Moldaso Line S.R.L. sau prin intermediul
            partenerilor specializati si agreati de Moldaso Line S.R.L.. Astfel, sunt asigurate confidentialitatea
            si securitatea informatiilor.
        </p>
        <p class="contract__descr">
            In momentul in care, clientul isi creaza un cont pe site, are posibilitatea sa isi exprime acordul cu
            privire la primirea de newslettere.
        </p>
        <p class="contract__descr">
            Clientul isi poate modifica optiunea cu privire la acordul emis catre vanzator in orice moment:
        </p>
        <p class="contract__descr">
            – prin contactarea Moldaso Line S.R.L. in acest sens.
        </p>
        <p class="contract__descr">
            – prin accesarea link-ului de dezabonare afisat in mesajele comerciale primite de la vanzator.
        </p>
        <p class="contract__descr">
            Renuntarea la primirea comunicările comerciale nu implica renuntarea la acceptul dat pentru prezentele
            termeni si conditii.
        </p>
        <p class="contract__descr">
            In urma achizitionarii unui bun sau serviciu, Moldaso Line S.R.L. poate transmite
            cumparatorului/utilizatorului comunicari comerciale cu privire la sugestii de bunuri sau servicii
            recomandate a fi utilizate impreuna cu bunul sau serviciul achizitionat.FACTURARE – PLATA
        </p>
        <p class="contract__descr">
            Preturile bunurilor si serviciilor afisate in cadrul site-ului www.noren.ro includ T.V.A. conform
            legislatiei in vigoare.
        </p>
        <p class="contract__descr">
            Pretul, modalitatea de plata si termenul de plata sunt specificate in fiecare comanda. Vanzatorul va
            emite catre Cumparator o factura pentru bunurile si serviciile livrate, obligatia cumparatorului fiind
            sa furnizeze toate informatiile necesare emiterii facturii conform cu legislatia in vigoare.
        </p>
        <p class="contract__descr">
            Vanzatorul va transmite cumparatorului factura aferenta comenzii ce contine bunuri si/sau servicii
            vandute la momentul livrării acestora.
        </p>
        <p class="contract__descr">
            Pentru o corecta comunicare a facturii aferente comenzii, cumparatorului ii revin obligatiile de a-si
            actualiza ori de cate ori este cazul datele din contul sau si de a accesa informatiile si documentele
            aferente fiecarei comenzi, existente in cont.
        </p>
        <p class="contract__descr">
            Datele cardului de plata ale clientului/ utilizatorului/ cumparatorului nu vor fi accesibile Moldaso
            Line S.R.L. si nici nu vor fi stocate de catre Moldaso Line S.R.L., ci doar de catre institutia de
            autorizare a tranzactiei sau o alta entitateautorizata sa presteze servicii de stocare date de
            identificare a cardului, despre a carei identitate clientul/ utilizatorul/ cumparatorul va fi informat,
            anterior introducerii datelor.
        </p>
        <p class="contract__descr">
            In anumite cazuri, pentru mentinerea securitatii tranzactiilor, la inregistrarea comenzii,
            Cumparatorului i se va solicita sa autorizeze plata prin reintroducerea parolei aferente contului sau
            utilizarea amprentei digitale in cazul terminalelor mobile care au aceasta facilitate.
        </p>
        <p class="contract__descr">
            Pentru motive de securitate a tranzactiilor clientul/ utilizatorul/ cumparatorul este sfatuit sa nu
            ramana logat pe site si sa nu seteze optiunea de logare automata pe dispozitivele mobile. Divulgarea
            parolei de acces in cont nu este permisa si se recomanda folosirea unei parole cu caracter puternic de
            securitate (de ex.: sa contina cel putin opt caractere, incluzand litere mari, litere mici, cifre si
            caractere speciale).
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">LIVRAREA BUNURILOR</h4>
        <p class="contract__descr">
            Vanzatorul se obliga sa livreze bunurile in sistem de curierat door-to-door catre cumparator sau la
            punctele sale de lucru, conform optiunii clientului.
        </p>
        <p class="contract__descr">
            Vanzatorul va asigura ambalarea corespunzatoare a bunurilor si va asigura transmiterea documentelor
            insotitoare.
        </p>

    </div>
    <div class="contract">
        <h4 class="contract__subtitle">TRANSFERUL PROPRIETATII BUNURILOR</h4>
        <p class="contract__descr">
            Proprietatea asupra bunurilor va fi transferata la livrare, dupa efectuarea platii din partea
            cumparatorului in locatia indicata in comanda (intelegand prin livrare – semnarea de primire a
            documentului de transport furnizat de curier sau semnarea de primire pe factura fiscala in cazul
            livrarilor efectuate de personalul vanzatorului).
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">RASPUNDERE</h4>
        <p class="contract__descr">
            Vanzatorul nu poate fi responsabil pentru daune de orice fel pe care cumparatorul sau oricare terta
            parte o poate suferi ca rezultat al indeplinirii de catre vanzator a oricarei din obligatiile sale
            conform comenzii si pentru daune care rezulta din utilizarea bunurilor si serviciilor dupa livrare si in
            special pentru pierderea acestora.
        </p>
        <p class="contract__descr">
            Prin crearea si utilizarea contului, clientul / utilizatorul/ cumparatorul isi asuma raspunderea pentru
            mentinerea confidentialitatii datelor de cont (user si parola) si pentru gestionarea accesarii contului,
            si, in masura permisa de legislatia in vigoare, este responsabil de activitatea derulata prin
            intermediul Contului sau.
        </p>
        <p class="contract__descr">
            Prin crearea contului si/sau utilizarea continutului si/sau plasarea comenzilor, clientul /
            utilizatorul/ cumparatorul accepta in mod expres si fara echivoc termenii si conditiile site-ului in
            ultima versiune actualizata care este comunicata in cadrul site-ului, existenta la data crearii contului
            si/sau utilizarii continutului si/sau la data plasarii comenzii.
        </p>
        <p class="contract__descr">
            Vanzatorul isi rezervă dreptul de a actualiza și modifica periodic Termenele si Conditiile Site-ului
            pentru a reflecta orice modificări ale modului si conditiilor de functionare a Site-ului sau orice
            modificări ale cerințelor legale. Documentul este opozabili Clientilor / Utilizatorilor/ Cumparatorilor
            de la momentul afisarii in Site. În cazul oricărei astfel de modificări, vom afișa pe Site versiunea
            modificată a Documentului, motiv pentru care va rugam sa verificati periodic continutul acestui
            Document.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">FORTA MAJORA</h4>
        <p class="contract__descr">
            Nici una din parti nu va fi raspunzatoare pentru neexecutarea obligatiilor sale contractuale, daca o
            astfel de neexecutare la termen si/sau in mod corespunzator, total sau partial este datorata unui
            eveniment de forta majora. Forta majora este evenimentul imprevizibil, in afara controlului partilor si
            care nu poate fi evitat.
        </p>
        <p class="contract__descr">
            Daca in termen de 15 (cincisprezece) zile de la data producerii lui, respectivul eveniment nu inceteaza
            fiecare parte va avea dreptul sa notifice celeilalte parti incetarea de plin drept a contractului fara
            ca vreuna dintre ele sa poata pretinde celeilalte alte daune-interese.
        </p>
    </div>
    <div class="contract">
        <h4 class="contract__subtitle">LEGEA APLICABILA – JURISDICTIA</h4>
        <p class="contract__descr">
            Prezentul contract este supus legii romane. Eventualele litigii aparute intre Moldaso Line S.R.L. si
            clienti / cumparatori se vor rezolva pe cale amiabila sau, in cazul in care aceasta nu va fi posibila,
            litigiile vor fi solutionate de instantele judecatoresti romane competente din Municipiul Bucuresti.
        </p>
    </div>
  </section>
	<!------------------End Terms & Conditions------------------>
	<!---------------------------------------------------------->
</main>
<x-store-footer />
