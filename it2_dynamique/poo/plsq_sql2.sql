Exemple de curseur implicite declare v_salaire employees.salary %type;
v_nom VARCHAR2(100) not null : = 'test';
TVA CONSTANT number : = 20;
v_ligne employees %rowtype;
cursor c_emp (v_id number) is
select
  *
from employees
where
  employee_id > v_id;
begin -- dans le cas d'une requete mono-tuple (1 seule ligne comme resultat)
  -- exemple de curseur implicite
  for ligne in c_emp (201) loop DBMS_OUTPUT.PUT_LINE(
    ligne.first_name || ' ' || ligne.last_name || ' touche un salaire de ' || ligne.salary || '$'
  );
end loop;
DBMS_OUTPUT.PUT_LINE(
  v_ligne.first_name || ' ' || v_ligne.last_name || ' touche un salaire de ' || v_ligne.salary || '$'
);
end;
exemple de curseur explicite declare v_salaire employees.salary %type;
v_nom VARCHAR2(100) not null : = 'test';
TVA CONSTANT number : = 20;
v_ligne employees %rowtype;
cursor c_emp (v_id number) is
select
  *
from employees
where
  employee_id > v_id;
begin -- dans le cas d'une requete mono-tuple (1 seule ligne comme resultat)
  -- exemple de curseur explicite
  OPEN c_emp(200);
loop fetch c_emp into v_ligne;
DBMS_OUTPUT.PUT_LINE('nom  est ' || v_ligne.last_name);
exit
  when c_emp %NOTFOUND;
end loop;
close c_emp;
end;