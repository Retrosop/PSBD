using System;
using Microsoft.Data.Sqlite;

namespace HelloApp
{
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