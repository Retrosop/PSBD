using System;
using Microsoft.Data.Sqlite;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Migrations.Operations;

namespace TestConnectDB
{
	class Operate
	{
		public void Add(DataContext db, string fio, DateTime dateroj, int age, bool pol)
				{
					Sotrudnik sotr = new Sotrudnik() { Fio = fio, Age = age, Dater = dateroj, Pol = pol};
					db.Sotrudnik.Add(sotr);
					db.SaveChanges();
				}
	}
	class Program
	{
		
		static void Main(string[] args)
		{
			Operate act = new Operate();

			// Добавление
			using (DataContext db = new DataContext())
			{
				act.Add(db, "Semenov", DateTime.Now, 34, true);
				//Sotrudnik sotrudnik1 = new Sotrudnik();
				//sotrudnik1.Fio = "Ivanov";
				//sotrudnik1.Age = 40;
				//sotrudnik1.Dater = DateTime.Now;
				//sotrudnik1.Pol = true;
				//db.Sotrudnik.Add(sotrudnik1);
				//db.SaveChanges();



				//Sotrudnik sotrudnik2 = new Sotrudnik();
				//sotrudnik2.Fio = "Sidorov";
				//sotrudnik2.Age = 38;
				//sotrudnik2.Dater = DateTime.Now;
				//db.Sotrudnik.Add(sotrudnik2);
				//db.SaveChanges();

				//Sotrudnik sotrudnik3 = new Sotrudnik() { Fio = "Petrov", Age = 33, Dater = DateTime.Now, Pol = true};
				//db.Add(sotrudnik3); 
				//db.SaveChanges();

				//Sotrudnik s1 = db.Sotrudnik.SingleOrDefault(s => s.Id == 1);
				//if (s1 != null)
				//{
				//	//удаляем объект
				//	db.Sotrudnik.Remove(s1);
				//	db.SaveChanges();
				//}

				//Sotrudnik s1 = db.Sotrudnik.SingleOrDefault(s => s.Id == 3);
				//if (s1 != null)
				//{
				//	s1.Fio = "Lavrov";
				//	db.SaveChanges();
				//}

				// выводим данные после обновления
				//var sall = db.Sotrudnik.Where(p => p.Fio == "Lavrov");
				var sall = db.Sotrudnik.Where(p => EF.Functions.Like(p.Fio.ToLower(), "%av%"));
				foreach (var s in sall)
				{
					Console.WriteLine($"{s.Id}.{s.Fio} - {s.Age}");
				}
			}






			//using (var connection = new SqliteConnection("Data Source=usersdata.db"))
			//{
			//	connection.Open();
			//}
			//Console.Read();
		}
	}
}