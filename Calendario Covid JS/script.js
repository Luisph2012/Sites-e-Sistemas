function covid(genre, idade, name) {

            var dataAtual = new Date();
            var anoAtual = dataAtual.getFullYear();
            var anoNascParts = dataNasc.split('/');
            var diaNasc = anoNascParts[0];
            var mesNasc = anoNascParts[1];
            var anoNasc = anoNascParts[2];
            var idade = anoAtual - anoNasc;
            var mesAtual = dataAtual.getMonth() + 1; 
            if(mesAtual < mesNasc){
            idade--; 
            } else {
            if(mesAtual == mesNasc){ 
            if(new Date().getDate() < diaNasc ){ 
            idade--; }}} 
    
    if (idade>=91&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of April.'}
        else if (idade>=91&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of April.'}
        else if (idade>=81&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of May.'}
        else if (idade>=81&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of May.'}
        else if (idade>=71&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of June.'}
        else if (idade>=71&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of June.'}
        else if (idade>=61&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of July.'}
        else if (idade>=61&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of July.'}
        else if (idade>=51&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of August.'}
        else if (idade>=51&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of August.'}
        else if (idade>=41&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of September.'}
        else if (idade>=41&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of September.'}
        else if (idade>=31&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of October.'}
        else if (idade>=31&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of October.'}
        else if (idade>=21&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of november.'}
        else if (idade>=21&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of november.'}
        else if (idade>=11&&genre=="f") {return name + ' Your vaccine is checked between 1 and 15 of december.'}
        else if (idade>=11&&genre=="m") {return name + ' Your vaccine is checked between 16 and 30 of december.'}
    else{
        return name + ' Your vaccine is checked between 1 and 30 of january 2021' 
    } 
}  


