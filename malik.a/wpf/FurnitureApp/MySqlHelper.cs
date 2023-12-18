using MySql.Data.MySqlClient;
using System;
using System.Data;

namespace FurnitureApp
{
	public class MySqlHelper
	{
		private readonly MySqlConnection _connection;

		public MySqlHelper(string connectionString)
		{
			_connection = new MySqlConnection(connectionString);
		}

		public DataTable ExecuteQuery(string query)
		{
			DataTable dataTable = new DataTable();

			try
			{
				_connection.Open();
				using (MySqlCommand command = new MySqlCommand(query, _connection))
				{
					using (MySqlDataAdapter adapter = new MySqlDataAdapter(command))
					{
						adapter.Fill(dataTable);
					}
				}
			}
			catch (Exception ex)
			{
				Console.WriteLine($"Error: {ex.Message}");
			}
			finally
			{
				_connection.Close();
			}

			return dataTable;
		}

		public int ExecuteNonQuery(string query)
		{
			int rowsAffected = 0;

			try
			{
				_connection.Open();
				using (MySqlCommand command = new MySqlCommand(query, _connection))
				{
					rowsAffected = command.ExecuteNonQuery();
				}
			}
			catch (Exception ex)
			{
				Console.WriteLine($"Error: {ex.Message}");
			}
			finally
			{
				_connection.Close();
			}

			return rowsAffected;
		}
	}
}
