using System;
using Microsoft.Data.Sqlite;

namespace HelloApp
{
	class Sotrudnik
	{
		int idSotrudnik;
		string fio;
		DateTime dater;
		bool pol;
	}
	class Staj
	{
		int idStaj;
		Sotrudnik sotrudnikId;
		DateTime beginWorkSotrudnik;
		DateTime endWorkSotrudnik;
		DateTime gosWorkSotrudnik;
	}
	class Report
	{
		int idReport;
		Staj StajId;
		string nomer_report;
	}
	class Comment
	{
		int idComment;
		Sotrudnik sotrudnikId;
		string commentsWork;
	}




	class Program
	{
		static void Main(string[] args)
		{
			using (var connection = new SqliteConnection("Data Source=usersdata.db"))
			{
				connection.Open();
			}
			Console.Read();
		}
	}
}